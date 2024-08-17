let lines = ['10.0','10.0'];

problem(lines);

function problem(lines) {
    let A = Number(lines[0]);
    A = A.toFixed(1);

    let B = Number(lines[1]);
    B = B.toFixed(1);

    let pesoA = 3.5;
    let pesoB = 7.5;

    let valorRealProvaA = pesoA * (A / 11);
    let valorRealProvaB = pesoB * (B / 11);

    let media = valorRealProvaA + valorRealProvaB;
        media = media.toFixed(5);

    console.log(`MEDIA = ${media}`);
}