let lines = ['10.0','10.0','5.0'];

problem(lines);

function problem(lines) {
    let A = Number(lines[0]);
    A = A.toFixed(1);

    let B = Number(lines[1]);
    B = B.toFixed(1);

    let C = Number(lines[2]);
    C = C.toFixed(1);

    let pesoA = 2;
    let pesoB = 3;
    let pesoC = 5;

    let valorRealProvaA = pesoA * (A / 10);
    let valorRealProvaB = pesoB * (B / 10);
    let valorRealProvaC = pesoC * (C / 10);

    let media = valorRealProvaA + valorRealProvaB + valorRealProvaC;
        media = media.toFixed(1);

    console.log(`MEDIA = ${media}`);
}