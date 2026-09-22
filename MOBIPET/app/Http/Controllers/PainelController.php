<?php

namespace App\Http\Controllers;

use App\Models\Agendamento;
use App\Models\Atendimento;
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
            'servico',
            'funcionario',
            'atendimento.servico'
        ])
        ->latest('id_agendamento')
        ->take(10)
        ->get();

        // Atendimentos com a esteira (RFID) em andamento, para o backup
        // manual de etapa no painel do funcionário.
        $atendimentosEmAndamento = Atendimento::whereNull('finalizado_em')
            ->with(['pet', 'servico'])
            ->orderByDesc('iniciado_em')
            ->get();

        return view(
            'painel-controle',
            compact(
                'agendamentosHoje',
                'pets',
                'pendentes',
                'funcionarios',
                'ultimosAgendamentos',
                'atendimentosEmAndamento'
            )
        );
    }
}