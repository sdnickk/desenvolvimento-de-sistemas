<?php
class ContaBancaria {
    public string $nome;
    public string $agencia;
    public string $conta;
    public float  $saldo;

    public function __construct($nome, $agencia, $conta, $saldoInicial = 0.0) {
        $this->nome    = $nome;
        $this->agencia = $agencia;
        $this->conta   = $conta;
        $this->saldo   = $saldoInicial;
    }

    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    public function sacar(float $valor): bool {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function imprimirSaldo(): void {
        echo "Titular: {$this->nome}<br>";
        echo "Agência: {$this->agencia} - Conta: {$this->conta}<br>";
        echo "Saldo atual: R$ " . number_format($this->saldo, 2, ',', '.') . "<br>";
    }
}

// Exemplo de uso:
$conta = new ContaBancaria("Maria Silva", "001", "12345-6", 1000.00);
$conta->depositar(250.00);
$conta->sacar(300.00);
$conta->imprimirSaldo();
?>
