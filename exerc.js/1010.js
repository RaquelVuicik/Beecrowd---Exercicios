let lines = ['12 1 5.30','16 2 5.10'];

problem(lines);

function problem(lines) {
    const line1 = lines[0].split(' ');
    const line2 = lines[1].split(' ');
    
    let peçasl1 = Number(line1[1]);
    let peçasl2 = Number(line2[1]);

    let vUnitPL1 = Number(line1[2]);
    let vUnitPL2 = Number(line2[2]);

    let totalPeçaValorL1 = peçasl1 * vUnitPL1;
    let totalPeçaValorL2 = peçasl2 * vUnitPL2;

    let somaValorTotalPeças = totalPeçaValorL1 + totalPeçaValorL2;
    somaValorTotalPeças = somaValorTotalPeças.toFixed(2);

    console.log(`VALOR A PAGAR: R$ ${somaValorTotalPeças}`);
}
