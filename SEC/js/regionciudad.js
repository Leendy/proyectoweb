var stateObject = {
    "Carbonifera": ["Múzquiz" ,"San Juan De Sabinas","Sabinas","Progreso","Juárez"],
    "Centro": ["Sierra Mojada","Ocampo","San Buenaventura","Lamadrid","Nadadores",
    "Escobedo","Cuatro Ciénegas","Sacramento","Frontera","Abasolo","Monclova","Castaños",
    "Candela"	 ],
    "Norte": ["Acuña" ,"Allende","Guerrero","Hidalgo","Jimenez","Morelos","Nava",
    "Piedras Negras","Villa Unión","Zaragoza"],
    "Laguna": ["Torreón" ,"Matamoros","San Pedro","Fco. I. Madero","Viesca"],
    "Laguna": ["Torreón" ,"Matamoros","San Pedro","Fco. I. Madero","Viesca"],
    "Sureste": ["Saltillo","Ramos Arizpe","General Cepeda","Arteaga","Parras De La Fuente"]
};

window.onload = function () {
    var stateSel = document.getElementById("stateSel"),
        countySel = document.getElementById("countySel");
    for (var state in stateObject) {
        stateSel.options[stateSel.options.length] = new Option(state, state);
    }
    stateSel.onchange = function () {
        countySel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) {
          countySel.options[0].text = ""
          return; // done   
        }  
        countySel.options[0].text = ""
        var counties = stateObject[this.value];
        for (var i = 0; i < counties.length; i++) {
            countySel.options[countySel.options.length] = new Option(counties[i], counties[i]);
        }
        if (countySel.options.length==2) {
          countySel.selectedIndex=1;
          countySel.onchange();
        }  
        
    }
    stateSel.onchange(); // reset in case page is reloaded
}