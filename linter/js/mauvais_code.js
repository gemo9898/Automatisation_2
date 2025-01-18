function test() {
    var a = 1; 
    var b = 2;
    var c = a + b;
    return c;
}

console.log(
    'Le résultat de ma fonction test est : ' + test() + ' !\n' +
    'La suite de ce message est inutilement longue, et ne devrait pas être sur une seule ligne\n' +
    'car c\'est illisible. C\'est une mauvaise pratique.'
);