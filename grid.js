for (let i = 0; i < 10; i++) {
    let tr = document.createElement('tr');
    tr.className = 'ligne' + i;
    document.body.querySelector('#player').appendChild(tr);
    for (let j = 0; j < 11; j++) {
        if (j == 0) {
            let td = document.createElement('td');
            td.className = 'caseBataille';
            td.textContent = i + 1; //l'intérieur de la balise td = X//
            document.body.querySelector('.ligne' + i).appendChild(td);
        } else {
            let td = document.createElement('td');
            td.className = 'caseBataille';
            document.body.querySelector('.ligne' + i).appendChild(td);
        }
    }
}
for (let i = 0; i < 10; i++) {
    let tr = document.createElement('tr');
    tr.className = 'ligne' + i;
    document.body.querySelector('#adversaire').appendChild(tr);
    for (let j = 0; j < 11; j++) {
        if (j == 0) {
            let td = document.createElement('td');
            td.className = 'caseBataille';
            td.textContent = i + 1; //l'intérieur de la balise td = X//
            document.body.querySelector('.ligne' + i).appendChild(td);
        } else {
            let td = document.createElement('td');
            td.className = 'caseBataille';
            document.body.querySelector('.ligne' + i).appendChild(td);
        }
    }
}