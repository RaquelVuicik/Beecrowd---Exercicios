let lines = ['150.00'];

problem(lines);

function problem(lines) {

    let raio = Number(lines[0]);
    raio = raio.toFixed(2);

    let π = 3.14159;
    let area = π * raio**2;
    area = area.toFixed(4);

    console.log(`A=${area}`);
}

/* area = π . raio2.
π = 3.14159
- Efetue o cálculo da área, 
elevando o valor de raio ao 
quadrado e multiplicando por π.

let raio
A= valor da variavel area

4 casas após o ponto decimal
imprimir o resultado no final

let raio = (lines)
raio.toFixed(2);

let π = 3.14159
let area = (`${π} * ${raio}**`);
area.toFixed(4);

console.log(`A=${area}`);

*/

