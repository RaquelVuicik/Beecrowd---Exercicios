let lines = ['0','9'];

problem(lines);

function problem(lines) {
    let v1 = parseInt(lines[0]);
    let v2 = parseInt(lines[1]);

    let PROD = v1 * v2;

    console.log(`PROD = ${PROD}`);
}