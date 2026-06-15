<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Pet;
use App\Models\Funcionario;
use Carbon\Carbon;

class PainelController extends Controller
{
    public function index()
    {
        $agendamentosHoje = Agendamento::whereDate(
            'data_agendamento',
            Carbon::today()
        )->count();

        $pets = Pet::count();

        $pendentes = Agendamento::where(
            'status_agendamento',
            'Pendente'
        )->count();

        $funcionarios = Funcionario::count();

        $ultimosAgendamentos = Agendamento::with([
            'pet',
            'servico'
        ])
        ->latest('id_agendamento')
        ->take(10)
        ->get();

        return view(
            'painel-controle',
            compact(
                'agendamentosHoje',
                'pets',
                'pendentes',
                'funcionarios',
                'ultimosAgendamentos'
            )
        );
    }
}