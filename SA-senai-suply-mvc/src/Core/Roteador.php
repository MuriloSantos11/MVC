<?php
declare(strict_types=1);

namespace App\Core;

final class Roteador {
    private array $rotas=[];

    // registrar as rotas no vetor


    // despachar as solicitações para o controller

    // executar o guard (private)
    private function executarGuards(array $guards): void {
        foreach ($guards as $guard) {
            [$classeGuard, $argumentos] = $guard;
            $classeGuard::proteger($argumentos ?? []);
        }
    }

    // resposta para o não encontrado
    private function responderNaoEncontrado(): void {
        http_response_code(404);
        echo "<h1 style='font-family:sans-serif;text-align:center;margin-top:50px;'>404 — Rota Nao Encontrada</h1>";
        echo "<p style='font-family:sans-serif;text-align:center;'><a href='/'>Voltar para o Inicio</a></p>";
    }
    
}
