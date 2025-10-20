console.log("Ahoj světe!");

let me = {
    firstname: "Anna-Marie",
    lastname: "Drietomska",
    age: 25,
    city: "Praha",
    fullname: function() {
        return this.firstname + " " + this.lastname;        
    }
};

console.log(me.firstname);
console.log(me.age);
console.log(me.city);
console.log(me.fullname());



2.
const ovoce = ['fík', 'banán', 'broskev'];

ovoce.push('jablko');
ovoce.includes('nektarinka');

console.log(ovoce);

let newovoce = ovoce.unshift('hruška');

console.log(ovoce[1]);
console.log(ovoce.length);



3. + 4.
let person = {
    name: "Miri",
    surname: "Matuščáková",
    fullname: function() {
        return this.name + " " + this.surname;
    },
    age: 30,
    hobbies: ['cestování', 'čtení', 'pilates'],
    isMarried: false,
    kids: { names: ['Valerie', 'Viktor'], ages: [5, 3], hobbies: ['malování', 'plavání'] }

};
person.age = 32;
let hobbies = person.hobbies;
hobbies.push('běhání');



console.log(person.fullname());
console.log(person.hobbies[0]);
console.log(hobbies.length);

console.log(person.kids.names[0]);
console.log(person.kids.hobbies[1]);
person.kids.ages [0] = 7;
console.log(person.kids.ages[0]);

5.

function secti(a, b)
{
    return a + b;
}

let vysledek = secti(5, 10);
console.log(vysledek);

function eurTOczk(value)
{
    return value * 24;
}

function czkTOeur(value)
{
    return value / 24;
}

console.log(eurTOczk(256));
console.log(czkTOeur(5700));

6.

let car = {
    brand: "Škoda",
    model: "Karoq",
    year: 2020,
    owners: { names: ['Pavel', 'Michal'], ages: [55, 48] },
}

console.log(car.brand);
console.log(car.model);

let names = car.names;
names = car.owners.names;
names.push('Anna-Marie');

console.log(names);
console.log(car.owners.names[1]);
