<div align="center">

<img src="https://capsule-render.vercel.app/api?type=waving&height=250&section=header&text=MobiPet&fontSize=60&fontColor=FFFFFF&fontAlignY=38&desc=Gest%C3%A3o%20inteligente%20e%20monitoramento%20de%20pets&descSize=18&descAlignY=60&color=0:0047B3,100:00B4FF&animation=fadeIn" width="100%"/>

<a href="https://git.io/typing-svg">
  <img src="https://readme-typing-svg.demolab.com?font=Fira+Code&weight=600&size=22&duration=3000&pause=800&color=0066FF&center=true&vCenter=true&width=600&lines=Petshop+%E2%86%94+Tutor+%E2%86%94+Pet+%E2%86%94+IoT;Laravel+%2B+Flutter+%2B+ESP32;Identifica%C3%A7%C3%A3o+de+pets+por+RFID;Acompanhamento+do+atendimento+no+app" alt="Typing SVG" />
</a>

<br><br>

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com/)
[![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com/)
[![Flutter](https://img.shields.io/badge/Flutter-02569B?style=for-the-badge&logo=flutter&logoColor=white)](https://flutter.dev/)
[![Dart](https://img.shields.io/badge/Dart-0175C2?style=for-the-badge&logo=dart&logoColor=white)](https://dart.dev/)
[![ESP32](https://img.shields.io/badge/ESP32-E7352C?style=for-the-badge&logo=espressif&logoColor=white)](https://www.espressif.com/)
[![Arduino](https://img.shields.io/badge/Arduino-00878F?style=for-the-badge&logo=arduino&logoColor=white)](https://www.arduino.cc/)

![Status](https://img.shields.io/badge/status-em%20desenvolvimento-0066FF?style=flat-square)
![TCC](https://img.shields.io/badge/TCC-SENAI%20ADS-1E90FF?style=flat-square)
![Last commit](https://img.shields.io/github/last-commit/SEU-USUARIO/MobiPet?style=flat-square&color=00B4FF)
![Repo size](https://img.shields.io/github/repo-size/SEU-USUARIO/MobiPet?style=flat-square&color=00B4FF)

**Um ecossistema tecnológico que conecta petshops, tutores, pets e dispositivos IoT.**

</div>

---

## 📌 Sobre o projeto

O **MobiPet** nasceu da necessidade de tornar o atendimento em petshops mais **organizado, tecnológico e transparente**.

Em um atendimento convencional, o tutor agenda um serviço, deixa o animal no estabelecimento e **espera sem saber em que etapa o atendimento está**. O MobiPet muda isso:

| 🏪 Petshop | 📱 Tutor | 📡 IoT |
|:--|:--|:--|
| Gerencia agendamentos, pets, clientes e funcionários em um painel web | Acompanha pelo app o status do atendimento em tempo real | Um cartão RFID identifica o pet e avança o atendimento com uma leitura |

> [!IMPORTANT]
> **O objetivo não é apenas administrar um petshop.** É conectar o estabelecimento, os profissionais, os pets e seus tutores em um **único ecossistema digital**.

---

## 🎯 Objetivos

- [x] 📅 Organizar agendamentos
- [x] 🐕 Gerenciar pets e tutores
- [x] 👨‍💼 Administrar funcionários e atendimentos
- [x] 📊 Centralizar informações operacionais
- [x] 📱 Permitir acompanhamento pelo aplicativo
- [x] 🔄 Atualizar o status dos serviços
- [ ] 📡 Integrar dispositivos IoT ao sistema
- [ ] 🪪 Identificar pets por RFID
- [ ] 📈 Apoiar a tomada de decisões com indicadores

> [!NOTE]
> Marque/desmarque os itens acima conforme o progresso real do projeto.

---

## 🚀 Principais funcionalidades

<table>
<tr>
<td width="50%" valign="top">

### 👤 Para tutores (App Flutter)

- 🐾 Cadastrar, visualizar e editar pets
- 📋 Consultar dados e histórico de atendimentos
- 📅 Realizar e acompanhar agendamentos
- 🔔 Acompanhar a evolução do serviço em tempo real

</td>
<td width="50%" valign="top">

### 🏪 Para o petshop (Painel Laravel)

- 🗓️ Gestão completa de agendamentos
- 👥 Cadastro de clientes, pets e funcionários
- 🔄 Controle do status de cada atendimento
- 🪪 Vínculo de cartões RFID aos pets

</td>
</tr>
</table>

### 🔔 Ciclo de vida do atendimento

```mermaid
stateDiagram-v2
    direction LR
    [*] --> Pendente: Agendamento criado
    Pendente --> EmAtendimento: 🪪 Leitura RFID / ação do funcionário
    EmAtendimento --> Concluido: 🪪 Leitura RFID / ação do funcionário
    Concluido --> [*]

    EmAtendimento: Em atendimento
    Concluido: Concluído ✅
```

---

## 🏗️ Arquitetura

```mermaid
flowchart LR
    subgraph Cliente["📱 Tutor"]
        APP["App Flutter"]
    end

    subgraph Loja["🏪 Petshop"]
        WEB["Painel Web<br/>(Blade)"]
        ESP["ESP32 + RC522<br/>Leitor RFID"]
    end

    subgraph Servidor["☁️ Backend"]
        API["API REST<br/>Laravel"]
        DB[("MySQL")]
    end

    APP <-->|HTTP / JSON| API
    WEB <--> API
    ESP -->|HTTP POST<br/>UID do cartão| API
    API <--> DB
```

| Camada | Tecnologia | Responsabilidade |
|:--|:--|:--|
| **Backend** | Laravel · PHP | Regras de negócio, autenticação e API REST |
| **Banco de dados** | MySQL | Persistência de tutores, pets, agendamentos e cartões |
| **Mobile** | Flutter · Dart | Experiência do tutor e acompanhamento do atendimento |
| **IoT** | ESP32 · RC522 · C++ (Arduino) | Leitura dos cartões RFID e envio para a API |

---

## 📡 Camada IoT / RFID

Cada pet recebe um **cartão RFID**. Ao aproximar o cartão do leitor, o ESP32 envia o UID para a API, que localiza o **agendamento do dia** daquele pet e avança o status automaticamente.

```mermaid
sequenceDiagram
    autonumber
    participant F as 👨‍💼 Funcionário
    participant E as 📡 ESP32 + RC522
    participant A as ⚙️ API Laravel
    participant D as 🗄️ MySQL
    participant T as 📱 App do tutor

    F->>E: Aproxima o cartão do pet
    E->>A: POST UID do cartão
    A->>D: Busca pet + agendamento de hoje
    D-->>A: Agendamento (Pendente / Em atendimento)
    A->>D: Avança o status
    A-->>E: 200 OK + novo status
    T->>A: Consulta atendimento
    A-->>T: Status atualizado 🔔
```

<details>
<br>

O funcionário pode cadastrar um pet diretamente pelo **Monitor Serial**, informando os dados do animal e o **ID do cliente**. Em seguida, aproxima um cartão novo, que fica vinculado ao pet recém-criado.

</details>

---

## 📂 Estrutura do repositório

```text
MobiPet/
├── 📁 backend/        # API e painel web em Laravel
├── 📁 mobile/         # Aplicativo Flutter do tutor
├── 📁 iot/            # Firmware do ESP32 (RC522)
└── 📄 README.md
```
---

---

## 🧠 Aprendizados

- Integração entre **três plataformas** distintas (web, mobile e embarcado) através de uma única API.
- Modelagem de um **fluxo de status** consistente compartilhado entre funcionário, tutor e hardware.
- Comunicação **HTTP a partir de microcontroladores** e tratamento de falhas de rede.

---

## 👨‍💻 Autor

<div align="center">

<a href="https://github.com/ArthurProvielo">
  <img src="https://github.com/ArthurProvidelo.png" width="110" style="border-radius:50%" alt="Arthur"/>
</a>

**Arthur**
<br>
Estudante de Análise e Desenvolvimento de Sistemas · SENAI

[![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/SEU-USUARIO)
[![LinkedIn](https://img.shields.io/badge/LinkedIn-0A66C2?style=for-the-badge&logo=linkedin&logoColor=white)](https://linkedin.com/in/SEU-USUARIO)
[![Portfólio](https://img.shields.io/badge/Portf%C3%B3lio-0066FF?style=for-the-badge&logo=googlechrome&logoColor=white)](https://SEU-PORTFOLIO)

</div>

---

<div align="center">

**Este é o meu Trabalho de Conclusão de Curso.**

⭐ Se este projeto te ajudou ou te inspirou, deixe uma estrela!

<img src="https://capsule-render.vercel.app/api?type=waving&height=120&section=footer&color=0:00B4FF,100:0047B3" width="100%"/>

</div>
