let lines = ['6','145','15.55'];

problem(lines);

function problem(lines) {
    let numFuncionario = Number(lines[0]);

    let horasTrabalhadas = Number(lines[1]);

    let valorRecebidoPorHora = Number(lines[2]);
    valorRecebidoPorHora = valorRecebidoPorHora.toFixed(2);

    let SALARIO = horasTrabalhadas * valorRecebidoPorHora;
    SALARIO = SALARIO.toFixed(2);

    console.log(`NUMBER = ${numFuncionario}`);
    console.log(`SALARY = U$ ${SALARIO}`);
}