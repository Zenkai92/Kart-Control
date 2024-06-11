
let  driver = [
    {name: 'Mario', speed: 7, acceleration: 2, weight: 6, handling: 4, traction: 3},
    {name: 'Luigi', speed: 7, acceleration: 2, weight: 6, handling: 3, traction: 2},
    {name: 'Toad', speed: 4, acceleration: 4, weight: 3, handling: 7, traction: 4},
    {name: 'Maskass', speed: 5, acceleration: 3, weight: 1, handling: 7, traction: 3},
    {name: 'Bowser', speed: 10, acceleration: 0, weight: 10, handling: 0, traction: 3},
    {name: 'Metal Mario', speed: 8, acceleration: 1, weight: 10, handling: 3, traction: 4},
    
];

let  bodies = [
    {name: 'Kart Standard', speed: 3, acceleration: 4, weight: 2, handling: 3, traction: 3},
    {name: 'ParaCoccinnelle', speed: 2, acceleration: 7, weight: 0, handling: 4, traction: 2},
    {name: 'Moto Standard', speed: 4, acceleration: 4, weight: 3, handling: 7, traction: 3},
    {name: 'Yoshi Moto', speed: 4, acceleration: 3, weight: 1, handling: 7, traction: 3},
    {name: 'Quad Standard', speed: 4, acceleration: 0, weight: 4, handling: 0, traction: 3},
    {name: 'Quad Nounours', speed: 4, acceleration: 5, weight: 2, handling: 3, traction: 3},
    
];

let  tires = [
    {name: 'Pneu Standard', speed: 2, acceleration: 4, weight: 2, handling: 3, traction: 3},
    {name: 'Mastodonte', speed: 2, acceleration: 2, weight: 4, handling: 2, traction: 5},
    {name: 'Roller', speed: 1, acceleration: 4, weight: 0, handling: 4, traction: 2},
    {name: 'Hors Piste', speed: 2, acceleration: 3, weight: 3, handling: 1, traction: 3},
    {name: 'Classique ', speed: 2, acceleration: 2, weight: 2, handling: 4, traction: 3},
    {name: 'Lisse', speed: 2, acceleration: 1, weight: 3, handling: 3, traction: 4},
    
];

let  gliders = [
    {name: 'Super Glider', speed: 1, acceleration: 1, weight: 1, handling: 1, traction: 1},
    {name: 'Nuages', speed: 1, acceleration: 2, weight: 0, handling: 1, traction: 1},
    {name: 'Ailes Wario', speed: 1, acceleration: 1, weight: 2, handling: 1, traction: 1},
    {name: 'Ombrelle de Peach', speed: 2, acceleration: 2, weight: 1, handling: 1, traction: 1},
    {name: 'Dendinaile', speed: 0, acceleration: 1, weight: 1, handling: 0, traction: 1},
    {name: 'Parachute', speed: 1, acceleration: 2, weight: 0, handling: 3, traction: 1},
    
];


let totalStats = {speed: 0, acceleration: 0, weight: 0, handling: 0, traction: 0};



for (let composition of compositions) {
    totalStats.speed =  driver.speed +  bodies.speed +  tires.speed +  gliders.speed;
    totalStats.acceleration =  driver.acceleration +  bodies.acceleration +  tires.acceleration +  gliders.acceleration;
    totalStats.weight =  driver.weight +  bodies.weight +  tires.weight +  gliders.weight;
    totalStats.handling +=  driver.handling +  bodies.handling +  tires.handling +  gliders.handling;
    totalStats.traction +=  driver.traction +  bodies.traction +  tires.traction +  gliders;
}


function generateOptions(components) {
    let options = '';
    for (let component of components) {
        options += `<option value="${component.name}">${component.name}</option>`;
    }
    return options;
}


let driverOptions = generateOptions(driver);
let bodiesOptions = generateOptions(bodies);
let tiresOptions = generateOptions(tires);
let glidersOptions = generateOptions(gliders);


document.getElementById('driver').innerHTML = driverOptions;
document.getElementById('bodies').innerHTML = bodiesOptions;
document.getElementById('tires').innerHTML = tiresOptions;
document.getElementById('gliders').innerHTML = glidersOptions;


let table = document.createElement('table');


let headerRow = document.createElement('tr');
for (let stat in totalStats) {
    let headerCell = document.createElement('th');
    headerCell.textContent = stat;
    headerRow.appendChild(headerCell);
}
table.appendChild(headerRow);


let dataRow = document.createElement('tr');
for (let stat in totalStats) {
    let dataCell = document.createElement('td');
    dataCell.textContent = totalStats[stat];
    dataRow.appendChild(dataCell);
}
table.appendChild(dataRow);


document.getElementById('tableContainer').appendChild(table);




document.addEventListener('DOMContentLoaded', function() {
    
    let select = document.getElementById('driver');

    
    for (let i = 0; i < driver.length; i++) {
        let option = document.createElement('option');
        option.value = driver[i].name;
        option.text = driver[i].name;
        select.appendChild(option);
    }
});




document.addEventListener('DOMContentLoaded', function() {
   
    let select = document.getElementById('bodies');

    
    for (let i = 0; i < bodies.length; i++) {
        let option = document.createElement('option');
        option.value = bodies[i].name;
        option.text = bodies[i].name;
        select.appendChild(option);
    }
});

document.addEventListener('DOMContentLoaded', function() {
    
    let select = document.getElementById('tires');


    for (let i = 0; i < tires.length; i++) {
        let option = document.createElement('option');
        option.value = tires[i].name;
        option.text = tires[i].name;
        select.appendChild(option);
    }
});


document.addEventListener('DOMContentLoaded', function() {
   
    let select = document.getElementById('gliders');

   
    for (let i = 0; i < gliders.length; i++) {
        let option = document.createElement('option');
        option.value = gliders[i].name;
        option.text = gliders[i].name;
        select.appendChild(option);
    }
});