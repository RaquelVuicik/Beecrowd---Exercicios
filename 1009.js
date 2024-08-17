let lines = ['JOAO','1700.00','1230.50'];

problem(lines);

function problem(lines) {
    let nome = (lines[0]);
    let salarioFixo = Number(lines[1]);

    let totalVendas = Number(lines[2]);

    let comissao = totalVendas * (15 / 100);

    let totalAReceber =  (salarioFixo + comissao);
    
    console.log(`TOTAL = R$ ${totalAReceber.toFixed(2)}`);
}