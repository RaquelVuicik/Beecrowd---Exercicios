let lines = ['5','6','-7','8'];

problem(lines);

function problem(lines) {
    let A = parseInt(lines[0]);
    let B = parseInt(lines[1]);
    let C = parseInt(lines[2]);
    let D = parseInt(lines[3]);

    let DIFERENCA = (A*B-C*D);

    console.log(`DIFERENCA = ${DIFERENCA}`)
}