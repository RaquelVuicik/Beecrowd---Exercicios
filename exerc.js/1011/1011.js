const lines = ['1523'];

problem(lines);

function problem(lines) {
    const raio = Number(lines[0]);
    const pi = 3.14159;
    const volume = (4/3) * pi * (raio**3);
    const volumeFormatado = volume.toFixed(3);
    console.log(`VOLUME = ${volumeFormatado}`);
}