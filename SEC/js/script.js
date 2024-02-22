window.onload = () => {
  const regionSel = document.getElementById("regionSel"),
    citySel = document.getElementById("citySel"),
    paisSel = document.getElementById("countrSel"),
    añoSel = document.getElementById("añoSel"),
    ScianSel = document.getElementById("ScianSel"),
    tipoSel = document.getElementById("tipoSel"),
    nearshoringSel = document.getElementById("NearshoringSel"),
    proyectoSel = document.getElementById("proyectoSel"),
    convenioSel = document.getElementById("convenioSel"),
    memoSel = document.getElementById("memoSel"),
    infoSel = document.getElementById("infoSel");

  // Crear una solicitud AJAX para obtener las variables PHP
  const xhr1 = new XMLHttpRequest();

  xhr1.open('GET', 'variables.php', true);

  xhr1.onload = function () {
    if (xhr1.status === 200) {
      const regionObject = JSON.parse(xhr1.responseText);

      for (const region in regionObject) {
        regionSel.options[regionSel.options.length] = new Option(region, region);
      }

      regionSel.addEventListener('change', function () {
        citySel.length = 1;

        if (this.selectedIndex < 1) {
          citySel.options[0].text = "Please select region first";
          return;
        }

        citySel.options[0].text = "Please select city";

        const cities = regionObject[this.value];

        for (let i = 0; i < cities.length; i++) {
          citySel.options[citySel.options.length] = new Option(cities[i], cities[i]);
        }

        if (citySel.options.length == 2) {
          citySel.selectedIndex = 1;
          citySel.onchange();
        }
      });

      // Llamar al evento onchange después de haber definido el evento
      regionSel.onchange();
    } else {
      console.error('Error al cargar las variables PHP.');
    }
  };

  // Crear una solicitud AJAX para obtener el archivo 'mostrar_paises.php'
  const xhr2 = new XMLHttpRequest();

  xhr2.open('GET', 'mostrar_paises.php?tipo=pais', true);

  // Manejar la respuesta de la solicitud AJAX
  xhr2.onload = () => {
    // Verificar si la solicitud fue exitosa
    if (xhr2.status === 200) {
      // Convertir la respuesta en un objeto JSON
      const countryObject = JSON.parse(xhr2.responseText);

      // Iterar sobre las claves del objeto JSON (los países)
      Object.keys(countryObject).forEach(country => {
        // Crear una nueva opción para el elemento 'paisSel' y agregarla al final
        paisSel.add(new Option(country, country));
      });
    }
  };

  // Crear una solicitud AJAX para obtener los años
  const xhr3 = new XMLHttpRequest();

  xhr3.open('GET', 'mostrar_años.php?tipo=años', true);

  xhr3.onload = () => {
    if (xhr3.status === 200) {
      const añoObject = JSON.parse(xhr3.responseText);

      Object.keys(añoObject).forEach(año => {
        añoSel.add(new Option(año, año));
      });
    } 
  };

  const xhr4 = new XMLHttpRequest();

  xhr4.open('GET', 'mostrar_Scian.php?tipo=Scian', true);

  xhr4.onload = () => {
    if (xhr4.status === 200) {
      const ScianObject = JSON.parse(xhr4.responseText);

      Object.keys(ScianObject).forEach(Scian => {
        ScianSel.add(new Option(Scian, Scian));
      });
    } 
  };

  const xhr5 = new XMLHttpRequest();

  xhr5.open('GET', 'mostrar_tipo.php?tipo=tipo', true);

  xhr5.onload = () => {
    if (xhr5.status === 200) {
      const tipoObject = JSON.parse(xhr5.responseText);

      Object.keys(tipoObject).forEach(tipo => {
        tipoSel.add(new Option(tipo, tipo));
      });
    } 
  };

  const xhr6 = new XMLHttpRequest();

  xhr6.open('GET', 'nearshoring.php?tipo=nearshoring', true);

  xhr6.onload = () => {
    if (xhr6.status === 200) {
      const nearshoringObject = JSON.parse(xhr6.responseText);

      Object.keys(nearshoringObject).forEach(nearshoring => {
        nearshoringSel.add(new Option(nearshoring, nearshoring));
      });
    } 
  };

  const xhr7 = new XMLHttpRequest();

  xhr7.open('GET', 'proyecto.php?tipo=proyecto', true);

  xhr7.onload = () => {
    if (xhr7.status === 200) {
      const proyectoObject = JSON.parse(xhr7.responseText);

      Object.keys(proyectoObject).forEach(proyecto => {
        proyectoSel.add(new Option(proyecto, proyecto));
      });
    } 
  };

  const xhr8 = new XMLHttpRequest();

  xhr8.open('GET', 'convenio.php?tipo=convenio', true);

  xhr8.onload = () => {
    if (xhr8.status === 200) {
      const convenioObject = JSON.parse(xhr8.responseText);

      Object.keys(convenioObject).forEach(convenio => {
        convenioSel.add(new Option(convenio, convenio));
      });
    } 
  };
  const xhr9 = new XMLHttpRequest();

  xhr9.open('GET', 'memo.php?tipo=memo', true);

  xh9r.onload = () => {
    if (xhr9.status === 200) {
      const memoObject = JSON.parse(xhr9.responseText);

      Object.keys(memoObject).forEach(memo => {
        memoSel.add(new Option(memo, memo));
      });
    } 
  };

  const xhr10 = new XMLHttpRequest();

  xhr10.open('GET', 'info.php?tipo=info', true);

  xhr10.onload = () => {
    if (xhr.status === 200) {
      const infoObject = JSON.parse(xhr10.responseText);

      Object.keys(infoObject).forEach(info => {
        infoSel.add(new Option(info, info));
      });
    } 
  };

  // Enviar las solicitudes AJAX
  xhr1.send();
  xhr2.send();
  xhr3.send();
  xhr4.send();
  xhr5.send();
  xhr6.send();
  xhr7.send();
  xhr8.send();
  xhr9.send();
  xhr10.send();

};