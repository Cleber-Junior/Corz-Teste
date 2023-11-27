function atualizarDadosProduto(){
    var select = document.getElementById("produtos");
    var valorSelecionado = select.options[select.selectedIndex].getAttribute("data-valor");
    var idSelecionado = select.options[select.selectedIndex].getAttribute("value");
    document.getElementById("produtoId").value = idSelecionado;
    document.getElementById("valorUnitario").value = valorSelecionado;

}

function idCliente(){
    var id = document.getElementById("clientes");
    var idSelecionado = id.options[id.selectedIndex].getAttribute("value");
    document.getElementById("clienteId").value = idSelecionado;
}

function calcularValorTotal() {
    var quantidade = parseFloat(document.getElementById("quantidade").value);
    var valorUnitario = parseFloat(document.getElementById("valorUnitario").value);
    var valorTotal = quantidade * valorUnitario || 0;
    var valorNota = valorTotal * 0.06;
    document.getElementById("valorTotal").value = valorTotal.toFixed(2);
    document.getElementById("valorNota").value = valorTotal.toFixed(2);
    document.getElementById("valorNota").value = valorNota.toFixed(2);
}

document.getElementById("quantidade").addEventListener("input", calcularValorTotal);