<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return vocode
     */
    public function run()
    {
        Unit::create([
            "code" => "18",
            "name" => "Tambor de cincuenta y cinco galones (EUA)",
        ]);
        Unit::create([
            "code" => "19",
            "name" => "Camión cisterna",
        ]);
        Unit::create([
            "code" => "26",
            "name" => "Tonelada real",
        ]);
        Unit::create([
            "code" => "29",
            "name" => "Libra por mil pies cuadrados",
            "simbol" => "Lb / kft²",
        ]);
        Unit::create([
            "code" => "30",
            "name" => "Día de potencia de caballos por tonelada métrica de aire seco",
        ]);
        Unit::create([
            "code" => "31",
            "name" => "Pescar",
        ]);
        Unit::create([
            "code" => "32",
            "name" => "Kilogramo por tonelada métrica seca del aire",
        ]);
        Unit::create([
            "code" => "36",
            "name" => "Pie cúbico por minuto por pie cuadrado",
            "description" => "Se requiere factor de conversión",
            "simbol" => "Ft³ / (min / ft²)",
        ]);
        Unit::create([
            "code" => "44",
            "name" => "Bolsa a granel de quinientos kilos",
        ]);
        Unit::create([
            "code" => "45",
            "name" => "Bolsa a granel de trescientos kilos",
        ]);
        Unit::create([
            "code" => "46",
            "name" => "Bolsa a granel de cincuenta libras",
        ]);
        Unit::create([
            "code" => "47",
            "name" => "Bolso de cincuenta libras",
        ]);
        Unit::create([
            "code" => "48",
            "name" => "Carga masiva",
        ]);
        Unit::create([
            "code" => "53",
            "name" => "Kilogramo teórico",
        ]);
        Unit::create([
            "code" => "54",
            "name" => "Tonelada teórica (UK)",
        ]);
        Unit::create([
            "code" => "62",
            "name" => "Por ciento por 1000 horas",
        ]);
        Unit::create([
            "code" => "63",
            "name" => "Tasa de fracaso en el tiempo",
        ]);
        Unit::create([
            "code" => "64",
            "name" => "Libra por pulgada cuadrada, calíbre",
        ]);
        Unit::create([
            "code" => "66",
            "name" => "Oersted",
            "simbol" => "Oe",
        ]);
        Unit::create([
            "code" => "69",
            "name" => "Escala específica de prueba",
        ]);
        Unit::create([
            "code" => "71",
            "name" => "Voltios amperios por libra",
        ]);
        Unit::create([
            "code" => "72",
            "name" => "Vatio por libra",
        ]);
        Unit::create([
            "code" => "73",
            "name" => "Amperios por centímetro",
        ]);
        Unit::create([
            "code" => "76",
            "name" => "Gauss",
            "simbol" => "Gs",
        ]);
        Unit::create([
            "code" => "78",
            "name" => "Kilogauss",
            "simbol" => "Ks",
        ]);
        Unit::create([
            "code" => "84",
            "name" => "Kilopound-force por pulgada cuadrada",
            "description" => "Uncodead de presión que define el número de kilopounds fuerza por pulgada cuadrada. \r\n\r\nUtilice kip por pulgada cuadrada (código común N20).",
            "simbol" => "Klbf / in²",
        ]);
        Unit::create([
            "code" => "90",
            "name" => "Saybold segundo universal",
        ]);
        Unit::create([
            "code" => "92",
            "name" => "Calorías por centímetro cúbico",
        ]);
        Unit::create([
            "code" => "93",
            "name" => "Calorías por gramo",
            "description" => "Utilice calorías de la tabla internacional (IT) por gramo (código común D75).",
            "simbol" => "Cal / g",
        ]);
        Unit::create([
            "code" => "94",
            "name" => "Uncodead de curl",
        ]);
        Unit::create([
            "code" => "95",
            "name" => "Veinte mil galones",
        ]);
        Unit::create([
            "code" => "96",
            "name" => "Diez mil galones (US)",
        ]);
        Unit::create([
            "code" => "97",
            "name" => "Diez kilos de tambor",
        ]);
        Unit::create([
            "code" => "98",
            "name" => "Quince kilos de tambor",
        ]);
        Unit::create([
            "code" => "05",
            "name" => "Ascensor",
        ]);
        Unit::create([
            "code" => "06",
            "name" => "Pequeño aerosol",
        ]);
        Unit::create([
            "code" => "08",
            "name" => "Montón de calor",
        ]);
        Unit::create([
            "code" => "10",
            "name" => "Grupos",
            "description" => "Una uncodead de conteo que define el número de grupos (grupo: conjunto de elementos clasificados juntos).",
        ]);
        Unit::create([
            "code" => "11",
            "name" => "Equipos",
            "description" => " Uncodead de recuento que define el número de equipos (equipo: un conjunto completo de equipo / materiales / objetos utilizados para un propósito específico).",
        ]);
        Unit::create([
            "code" => "13",
            "name" => "Raciones",
            "description" => "Una uncodead de recuento para definir el número de raciones (ración: una sola porción de las disposiciones).",
        ]);
        Unit::create([
            "code" => "14",
            "name" => "Shot",
            "description" => "Uncodead de medcodea para liqucodeos.",
        ]);
        Unit::create([
            "code" => "15",
            "name" => "Palo, medcodea militar.",
            "description" => "Uncodead para el momento de rotación relacionado con la longitud según el sistema de uncodeades Anglo-Americanas e Imperial.",
        ]);
        Unit::create([
            "code" => "16",
            "name" => "Tambor de 115 kilogramos",
        ]);
        Unit::create([
            "code" => "17",
            "name" => "Tambor de cien libras",
        ]);
        Unit::create([
            "code" => "1A",
            "name" => "Milla de carros",
        ]);
        Unit::create([
            "code" => "1B",
            "name" => "Recuento de automóviles",
        ]);
        Unit::create([
            "code" => "1C",
            "name" => "Conteo de locomotoras",
        ]);
        Unit::create([
            "code" => "1D",
            "name" => "Caboose count",
        ]);
        Unit::create([
            "code" => "1E",
            "name" => "Coche vacío",
        ]);
        Unit::create([
            "code" => "1F",
            "name" => "Milla de tren",
        ]);
        Unit::create([
            "code" => "1G",
            "name" => "Galón del uso del combustible (los EUA)",
        ]);
        Unit::create([
            "code" => "1H",
            "name" => "Milla de caboose",
        ]);
        Unit::create([
            "code" => "1I",
            "name" => " Tipo de interés fijo",
            "description" => " Uncodead de cantcodead expresada como una tasa predeterminada o conjunto para el uso de una instalación o servicio.",
        ]);
        Unit::create([
            "code" => "1J",
            "name" => "Tonelada milla",
        ]);
        Unit::create([
            "code" => "1K",
            "name" => "Milla locomotora",
        ]);
        Unit::create([
            "code" => "1L",
            "name" => "Recuento total de automóviles",
        ]);
        Unit::create([
            "code" => "1M",
            "name" => "Milla total del coche",
        ]);
        Unit::create([
            "code" => "1X",
            "name" => "Cuarto de milla",
        ]);
        Unit::create([
            "code" => "20",
            "name" => " Contenedores de veinte pies",
            "description" => " Uncodead de conteo que define el número de contenedores de transporte que mcodeen 20 pies de longitud.",
        ]);
        Unit::create([
            "code" => "21",
            "name" => " Contenedor de cuarenta pies",
            "description" => " Uncodead de conteo que define el número de contenedores de transporte que mcodeen 40 pies de longitud.",
        ]);
        Unit::create([
            "code" => "22",
            "name" => "Decilitro por gramo",
            "simbol" => "dl/g",
        ]);
        Unit::create([
            "code" => "23",
            "name" => "Gramo por centímetro cúbico",
            "simbol" => "g/cm³",
        ]);
        Unit::create([
            "code" => "24",
            "name" => "Libra teórica",
            "description" => " Uncodead de masa que define la masa esperada de material expresado como el número de libras.",
        ]);
        Unit::create([
            "code" => "25",
            "name" => "Gramo por centímetro cuadrado",
            "simbol" => "g/cm²",
        ]);
        Unit::create([
            "code" => "27",
            "name" => "Tonelada teórica",
            "description" => "Uncodead de masa que define la masa esperada de material, expresada como el número de toneladas.",
        ]);
        Unit::create([
            "code" => "28",
            "name" => "Kilogramo por metro cuadrado",
            "simbol" => "kg/m²",
        ]);
        Unit::create([
            "code" => "2A",
            "name" => "Radián por segundo",
            "description" => "Es la veloccodead de un cuerpo que, con una rotación uniforme alrededor de un eje fijo, gira en 1 segundo, 1 radián. ",
            "simbol" => "rad/s",
        ]);
        Unit::create([
            "code" => "2B",
            "name" => "Radián por segundo cuadrado",
            "description" => "Es la aceleración angular de un cuerpo animado de una rotación uniformemente variada alrededor de un eje fijo, cuya veloccodead angular, varía 1 radián por segundo, en 1 segundo. ",
            "simbol" => "rad/s²",
        ]);
        Unit::create([
            "code" => "2C",
            "name" => "Roentgen",
            "simbol" => "R",
        ]);
        Unit::create([
            "code" => "2G",
            "name" => "Voltios CA",
            "description" => " Una uncodead de potencial eléctrico en relación a la corriente alterna (CA).",
            "simbol" => "V",
        ]);
        Unit::create([
            "code" => "2H",
            "name" => "Voltios CD",
            "description" => "Uncodead de potencial eléctrico en relación con corriente directa (CD).",
            "simbol" => "V",
        ]);
        Unit::create([
            "code" => "2I",
            "name" => "Uncodead térmica británica (tabla internacional) por hora",
            "simbol" => "BtuIT/h",
        ]);
        Unit::create([
            "code" => "2J",
            "name" => "Centímetro cúbico por segundo",
            "simbol" => "cm³/s",
        ]);
        Unit::create([
            "code" => "2K",
            "name" => "Pie cúbico por hora",
            "simbol" => "ft³/h",
        ]);
        Unit::create([
            "code" => "2L",
            "name" => "Pie cúbico por minuto",
            "simbol" => "ft³/min",
        ]);
        Unit::create([
            "code" => "2M",
            "name" => "Centímetro por segundo",
            "simbol" => "cm/s",
        ]);
        Unit::create([
            "code" => "2N",
            "name" => "Decibel",
            "description" => "Medcodea de sonorcodead o sensación sonora que es igual a la décima parte de un bel.",
            "simbol" => "dB",
        ]);
        Unit::create([
            "code" => "2P",
            "name" => "Kilobyte",
            "description" => " Uncodead de información igual a 10 ³  (1000) bytes.",
            "simbol" => "kbyte",
        ]);
        Unit::create([
            "code" => "2Q",
            "name" => "Kilobecquerel",
            "simbol" => "kBq",
        ]);
        Unit::create([
            "code" => "2R",
            "name" => "Kilocurie",
            "simbol" => "kCi",
        ]);
        Unit::create([
            "code" => "2U",
            "name" => "Megagramo",
            "simbol" => "Mg",
        ]);
        Unit::create([
            "code" => "2V",
            "name" => "Megagrama por hora",
            "simbol" => "Mg / h",
        ]);
        Unit::create([
            "code" => "2X",
            "name" => "Metro por minuto",
            "simbol" => "m/min",
        ]);
        Unit::create([
            "code" => "2Y",
            "name" => "Milliroentgen",
            "simbol" => "mR",
        ]);
        Unit::create([
            "code" => "2Z",
            "name" => "Milivoltio",
            "simbol" => "mV",
        ]);
        Unit::create([
            "code" => "33",
            "name" => "Kilopascal por grtr",
            "simbol" => "kPa·m²/g",
        ]);
        Unit::create([
            "code" => "34",
            "name" => "Kilopascal por milimetro",
            "simbol" => "kPa/mm",
        ]);
        Unit::create([
            "code" => "35",
            "name" => "Milimetro por un segundo centimetro cuadrado",
            "simbol" => "ml/(cm²·s)",
        ]);
        Unit::create([
            "code" => "37",
            "name" => "Onza por pie cuadrado",
            "simbol" => "oz/ft²",
        ]);
        Unit::create([
            "code" => "38",
            "name" => "Onzas por pie cuadrado por 0,01 pulgadas",
            "simbol" => "oz/(ft²/cin)",
        ]);
        Unit::create([
            "code" => "3B",
            "name" => "Megajoule",
            "simbol" => "MJ",
        ]);
        Unit::create([
            "code" => "3C",
            "name" => "Manmonth",
            "description" => "Uncodead de cuenta que define el número de meses que una persona o personas pueden desempeñar alguna activcodead.",
        ]);
        Unit::create([
            "code" => "3E",
            "name" => "Libra por libra de producto",
        ]);
        Unit::create([
            "code" => "3G",
            "name" => "Libra por pieza de producto",
        ]);
        Unit::create([
            "code" => "3H",
            "name" => "Kilogramo por kilogramo de producto",
        ]);
        Unit::create([
            "code" => "3I",
            "name" => "Kilogramo por pedazo de producto",
        ]);
        Unit::create([
            "code" => "40",
            "name" => "Mililitro por segundo",
            "simbol" => "ml/s",
        ]);
        Unit::create([
            "code" => "41",
            "name" => "Mililitro por minuto",
            "simbol" => "ml/min",
        ]);
        Unit::create([
            "code" => "4B",
            "name" => "Gorra",
        ]);
        Unit::create([
            "code" => "4C",
            "name" => "Centistokes",
            "simbol" => "cSt",
        ]);
        Unit::create([
            "code" => "4E",
            "name" => "Veinte pack",
        ]);
        Unit::create([
            "code" => "4G",
            "name" => "Microlitro",
            "simbol" => "µl",
        ]);
        Unit::create([
            "code" => "4H",
            "name" => "Micra",
            "description" => "El micrómetro, micrón o micra es una uncodead de longitud equivalente a una milésima parte de un milímetro.",
            "simbol" => "µm",
        ]);
        Unit::create([
            "code" => "4K",
            "name" => "Miliamperio",
            "simbol" => "mA",
        ]);
        Unit::create([
            "code" => "4L",
            "name" => "Megabyte",
            "description" => "Uncodead que se usa para cuantificar un caudal de datos equivalente a 1000 kb/s.",
            "simbol" => "Mbyte",
        ]);
        Unit::create([
            "code" => "4M",
            "name" => "Miligramo por hora",
            "simbol" => "mg/h",
        ]);
        Unit::create([
            "code" => "4N",
            "name" => "Megabequerel",
            "simbol" => "MBq",
        ]);
        Unit::create([
            "code" => "4O",
            "name" => "Microfaradio",
            "simbol" => "µF",
        ]);
        Unit::create([
            "code" => "4P",
            "name" => "Newton por metro",
            "simbol" => "N/m",
        ]);
        Unit::create([
            "code" => "4Q",
            "name" => "Onza pulgada",
            "simbol" => "oz·in",
        ]);
        Unit::create([
            "code" => "4R",
            "name" => "Onza pie",
            "simbol" => "oz·ft",
        ]);
        Unit::create([
            "code" => "4T",
            "name" => "Picofaradio",
            "simbol" => "pF",
        ]);
        Unit::create([
            "code" => "4U",
            "name" => "Libra por hora",
            "simbol" => "lb/h",
        ]);
        Unit::create([
            "code" => "4W",
            "name" => "Tonelada (EUA) por hora",
            "simbol" => "ton (US) /h",
        ]);
        Unit::create([
            "code" => "4X",
            "name" => "Kilolitro por hora",
            "simbol" => "kl/h",
        ]);
        Unit::create([
            "code" => "56",
            "name" => "Sitas",
            "description" => " Uncodead de área de placa de estaño igual a un área de superficie de 100 metros cuadrados.",
        ]);
        Unit::create([
            "code" => "57",
            "name" => "Malla",
            "description" => "Una uncodead de recuento de definir el número de hebras por pulgada como una medcodea de la finura de un producto tejcodeo.",
        ]);
        Unit::create([
            "code" => "58",
            "name" => " kilogramo neto",
            "description" => "Uncodead de masa que define el número total de kilogramos después de las deducciones.",
        ]);
        Unit::create([
            "code" => "59",
            "name" => "Parte por millón",
            "description" => " Una uncodead de proporción igual a 10⁻⁶.",
            "simbol" => "ppm",
        ]);
        Unit::create([
            "code" => "5A",
            "name" => "Barril por minuto",
            "simbol" => "barrel (US)/min",
        ]);
        Unit::create([
            "code" => "5B",
            "name" => "Batch",
            "description" => "Uncodead de conteo que define el número de lotes (lote: cantcodead de material produccodeo en una operación o número de animales o personas que vienen a la vez).",
        ]);
        Unit::create([
            "code" => "5C",
            "name" => "Galón (US) por mil",
        ]);
        Unit::create([
            "code" => "5E",
            "name" => "Mmscf/day",
            "description" => "Uncodead de volumen equivalente a un millón (1,000,000) pies cúbicos de gas por día.",
        ]);
        Unit::create([
            "code" => "5F",
            "name" => "Libra por mil",
        ]);
        Unit::create([
            "code" => "5G",
            "name" => "bomba",
        ]);
        Unit::create([
            "code" => "5H",
            "name" => "Escenario",
        ]);
        Unit::create([
            "code" => "5I",
            "name" => "Pies cúbicos estándar",
            "description" => "Utilice estándar (código común WSD)",
            "simbol" => "Std",
        ]);
        Unit::create([
            "code" => "5J",
            "name" => "Caballos de potencia hcoderáulica",
            "description" => "Uncodead de potencia de la definición de los caballos de potencia hcoderáulica suministrada por una bomba de flucodeo dependiendo de la viscoscodead del flucodeo.",
        ]);
        Unit::create([
            "code" => "5K",
            "name" => "Contar por minuto",
        ]);
        Unit::create([
            "code" => "5P",
            "name" => "Nivel sísmico",
        ]);
        Unit::create([
            "code" => "5Q",
            "name" => "Línea sísmica",
        ]);
        Unit::create([
            "code" => "60",
            "name" => "Tanto por ciento en peso",
            "description" => "Una uncodead de proporción igual a 10⁻².",
        ]);
        Unit::create([
            "code" => "61",
            "name" => "Parte por mil millones (EUA)",
            "description" => "Una uncodead de proporción igual a 10⁻⁹.",
            "simbol" => "ppb",
        ]);
        Unit::create([
            "code" => "74",
            "name" => "Milipascal",
            "simbol" => "mPa",
        ]);
        Unit::create([
            "code" => "77",
            "name" => "Mili-pulgada",
            "simbol" => "mil",
        ]);
        Unit::create([
            "code" => "80",
            "name" => "Libra por pulgada cuadrado absoluta",
            "simbol" => "lb/in²",
        ]);
        Unit::create([
            "code" => "81",
            "name" => "Henry",
            "description" => "Un henry es la uncodead para la inductancia eléctrica en el Sistema Internacional de Uncodeades. Es la inductancia eléctrica de un circuito cerrado en el que se produce una fuerza electromotriz de 1 voltio, cuando la corriente eléctrica que recorre el circuito varía uniformemente a razón de un amperio por segundo.",
            "simbol" => "H",
        ]);
        Unit::create([
            "code" => "85",
            "name" => "Pie libra-fuerza",
            "simbol" => "ft·lbf",
        ]);
        Unit::create([
            "code" => "87",
            "name" => "Libra por pie cúbico",
            "simbol" => "lb/ft³",
        ]);
        Unit::create([
            "code" => "89",
            "name" => "Poise",
            "description" => "El poise (símbolo: P) es la uncodead de viscoscodead dinámica del sistema cegesimal de uncodeades.",
            "simbol" => "P",
        ]);
        Unit::create([
            "code" => "91",
            "name" => "Stokes",
            "description" => "El Stokes es la uncodead de viscoscodead cinemática en el Sistema Cegesimal de Uncodeades",
            "simbol" => "St",
        ]);
        Unit::create([
            "code" => "A1",
            "name" => "15 ° C calorías",
            "simbol" => "Cal $ _ $",
        ]);
        Unit::create([
            "code" => "A10",
            "name" => "Amperio por metro cuadrado por joule segundo",
            "simbol" => "A·m²/(J·s)",
        ]);
        Unit::create([
            "code" => "A11",
            "name" => "Ángstrom",
            "description" => "El ángstrom es una uncodead de longitud empleada principalmente para expresar longitudes de onda, distancias moleculares y atómicas, etc.",
            "simbol" => "Å",
        ]);
        Unit::create([
            "code" => "A12",
            "name" => "Uncodead astronómica",
            "description" => "Es una uncodead de longitud igual por definición a 149 597 870 700 metros, y que equivale aproximadamente a la distancia media entre el planeta Tierra y el Sol.",
            "simbol" => "ua",
        ]);
        Unit::create([
            "code" => "A13",
            "name" => "Attojoule",
            "description" => " Una uncodead SI de la energía, el trabajo, y el calor igual a 10 -18 joules",
            "simbol" => "aJ",
        ]);
        Unit::create([
            "code" => "A14",
            "name" => "Barn",
            "description" => "Es una uncodead de superficie, equivalente a 10-28 m² (100 femtómetros cuadrados). Sus múltiplos son muy utilizados en física de partículas para medir las secciones eficaces en reacciones nucleares, y sus inversos para medir luminoscodeades.",
            "simbol" => "b",
        ]);
        Unit::create([
            "code" => "A15",
            "name" => "Barn por electrovoltio",
            "simbol" => "b/eV",
        ]);
        Unit::create([
            "code" => "A16",
            "name" => "Barn por electrovoltio ",
            "simbol" => "b/(sr·eV)",
        ]);
        Unit::create([
            "code" => "A17",
            "name" => "Barn por esteroradian",
            "simbol" => "b/sr",
        ]);
        Unit::create([
            "code" => "A18",
            "name" => "Becquerel por kilogramo",
            "simbol" => "Bq/kg",
        ]);
        Unit::create([
            "code" => "A19",
            "name" => "Becquerel por metro cúbico",
            "simbol" => "Bq/m³",
        ]);
        Unit::create([
            "code" => "A2",
            "name" => "Amperio por centímetro",
            "simbol" => "A/cm",
        ]);
        Unit::create([
            "code" => "A20",
            "name" => "Uncodead térmica británica (tabla internacional) por segundo pie cuadrado grado rankine.",
            "simbol" => "BtuIT/(s·ft²·°R)",
        ]);
        Unit::create([
            "code" => "A21",
            "name" => "Uncodead térmica británica (tabla internacional) por libra grado rankine",
            "simbol" => "Btu/IT(lb·°R)",
        ]);
        Unit::create([
            "code" => "A22",
            "name" => "Uncodead térmica británica (tabla internacional) por segundo pie grado rankine",
            "simbol" => "BtuIT/(s·ft·°R)",
        ]);
        Unit::create([
            "code" => "A23",
            "name" => "Uncodead térmica británica (tabla internacional) por hora pie cuadrado grado rankine.",
            "simbol" => "BtuIT/(h·ft²·°R)",
        ]);
        Unit::create([
            "code" => "A24",
            "name" => "Candela por metro cuadrado",
            "simbol" => "cd/m²",
        ]);
        Unit::create([
            "code" => "A25",
            "name" => "Caballo de vapor",
            "description" => "Sinónimo: Caballo de fuerza métrico",
            "simbol" => "CV",
        ]);
        Unit::create([
            "code" => "A26",
            "name" => "Culombio metro",
            "simbol" => "C·m",
        ]);
        Unit::create([
            "code" => "A27",
            "name" => "Culombio metro cuadrado por voltio",
            "simbol" => "C·m²/V",
        ]);
        Unit::create([
            "code" => "A28",
            "name" => "Culombio por centímetro cúbico",
            "simbol" => "C/cm³",
        ]);
        Unit::create([
            "code" => "A29",
            "name" => "Culombio por metro cúbico",
            "simbol" => "C/m³",
        ]);
        Unit::create([
            "code" => "A3",
            "name" => "Amperio por milímetro",
            "simbol" => "A/mm",
        ]);
        Unit::create([
            "code" => "A30",
            "name" => "Culombio por milimetro cúbico",
            "simbol" => "C/mm³",
        ]);
        Unit::create([
            "code" => "A31",
            "name" => "Culombio por kilogramo-segundo",
            "simbol" => "C/(kg·s)",
        ]);
        Unit::create([
            "code" => "A32",
            "name" => "Culombio por Mol",
            "simbol" => "C/mol",
        ]);
        Unit::create([
            "code" => "A33",
            "name" => "Culombio por centímetro cuadrado",
            "simbol" => "C/cm²",
        ]);
        Unit::create([
            "code" => "A34",
            "name" => "Culombio por metro cuadrado",
            "simbol" => "C/m²",
        ]);
        Unit::create([
            "code" => "A35",
            "name" => "Culombio por milímetro cuadrado",
            "simbol" => "C/mm²",
        ]);
        Unit::create([
            "code" => "A36",
            "name" => "Centimetro cúbico por Mol",
            "simbol" => "cm³/mol",
        ]);
        Unit::create([
            "code" => "A37",
            "name" => "Decimetro cuadrado por Mol",
            "simbol" => "dm³/mol",
        ]);
        Unit::create([
            "code" => "A38",
            "name" => "Cubic pooulo p",
            "simbol" => "m³/C",
        ]);
        Unit::create([
            "code" => "A39",
            "name" => "Metro cúbico por kilogramo",
            "simbol" => "m³/kg",
        ]);
        Unit::create([
            "code" => "A4",
            "name" => "Amperio por centímetro cuadrado",
            "simbol" => "A/cm²",
        ]);
        Unit::create([
            "code" => "A40",
            "name" => "Metro cubbico por Mol",
            "simbol" => "m³/mol",
        ]);
        Unit::create([
            "code" => "A41",
            "name" => "Amperio por metro cuadrado",
            "simbol" => "A/m²",
        ]);
        Unit::create([
            "code" => "A42",
            "name" => "Curie por kilogramo",
            "simbol" => "Ci/kg",
        ]);
        Unit::create([
            "code" => "A43",
            "name" => "Tonelaje de peso muerto",
            "description" => "Uncodead de masa que define la diferencia entre el peso de un barco cuando está completamente vacío y su peso cuando está completamente cargado, expresado como el número de toneladas.",
            "simbol" => "dwt",
        ]);
        Unit::create([
            "code" => "A44",
            "name" => "Decalitro",
            "simbol" => "dal",
        ]);
        Unit::create([
            "code" => "A45",
            "name" => "Decámetro",
            "description" => "Medcodea de longitud, de símbolo dam o Dm, que es igual a 10 metros.",
            "simbol" => "dam",
        ]);
        Unit::create([
            "code" => "A47",
            "name" => "Decitex",
            "description" => "Uncodead de denscodead de hilo. Un decitex es igual a una masa de 1 gramo por 10 kilómetros de longitud.",
            "simbol" => "dtex (g/10km)",
        ]);
        Unit::create([
            "code" => "A48",
            "name" => "Grado rankine",
            "description" => "Consulte ISO 80000-5 (Cantcodeades y uncodeades - Parte 5: Termodinámica)",
            "simbol" => "°R",
        ]);
        Unit::create([
            "code" => "A49",
            "name" => "Negador",
            "description" => "Uncodead de denscodead de hilo. Una denier es igual a una masa de 1 gramo por 9 kilómetros de longitud.",
            "simbol" => "den (g/9 km)",
        ]);
        Unit::create([
            "code" => "A5",
            "name" => "Amperio metro cuadrado",
            "simbol" => "A·m²",
        ]);
        Unit::create([
            "code" => "A50",
            "name" => "Dina segundo por centímetro cúbico",
            "simbol" => "Dyn · s / cm³",
        ]);
        Unit::create([
            "code" => "A51",
            "name" => "Dina segundo por centímetro",
            "simbol" => "Dyn · s / cm",
        ]);
        Unit::create([
            "code" => "A52",
            "name" => "Dina segundo por centímetro a la quinta potencia",
            "simbol" => "Dyn · s / cm⁵",
        ]);
        Unit::create([
            "code" => "A53",
            "name" => "Electrónvoltio",
            "simbol" => "eV",
        ]);
        Unit::create([
            "code" => "A54",
            "name" => "Electrovoltio por metro",
            "simbol" => "eV/m",
        ]);
        Unit::create([
            "code" => "A55",
            "name" => "Electrovoltio por metro cuadrado",
            "simbol" => "eV·m²",
        ]);
        Unit::create([
            "code" => "A56",
            "name" => "Electrovoltio metro cuadrado por kilogramo",
            "simbol" => "eV·m²/kg",
        ]);
        Unit::create([
            "code" => "A57",
            "name" => "Ergio",
            "simbol" => "ergio",
        ]);
        Unit::create([
            "code" => "A58",
            "name" => "Erg por centímetro",
            "simbol" => "Erg / cm",
        ]);
        Unit::create([
            "code" => "A59",
            "name" => "La cobertura de nubes 8-parte",
            "description" => "Uncodead de recuento para definir el número de octavos de partes como una medcodea de la cobertura de nubes de la ccúpula celeste. \r\n\r\n'Sinónimo: OKTA, OCTA",
        ]);
        Unit::create([
            "code" => "A6",
            "name" => "Amperio por metro cuadrado Kelvin cuadrado",
            "simbol" => "A/(m²·K²)",
        ]);
        Unit::create([
            "code" => "A60",
            "name" => "Erg por centímetro cúbico",
            "simbol" => "Erg / cm³",
        ]);
        Unit::create([
            "code" => "A61",
            "name" => "Erg por gramo",
            "simbol" => "Erg / g",
        ]);
        Unit::create([
            "code" => "A62",
            "name" => "Erg por segundo gramo",
            "simbol" => "Erg / g · s",
        ]);
        Unit::create([
            "code" => "A63",
            "name" => "Erg por segundo",
            "simbol" => "Ergs",
        ]);
        Unit::create([
            "code" => "A64",
            "name" => "Erg por segundo centímetro cuadrado",
            "simbol" => "Erg / (s · cm²)",
        ]);
        Unit::create([
            "code" => "A65",
            "name" => "Erg por centímetro cuadrado segundo",
            "simbol" => "Erg / (cm² · s)",
        ]);
        Unit::create([
            "code" => "A66",
            "name" => "Erg centímetro cuadrado",
            "simbol" => "Erg · cm²",
        ]);
        Unit::create([
            "code" => "A67",
            "name" => "Erg centímetro cuadrado por gramo",
            "simbol" => "Erg · cm² / g",
        ]);
        Unit::create([
            "code" => "A68",
            "name" => "Exajoule",
            "simbol" => "EJ",
        ]);
        Unit::create([
            "code" => "A69",
            "name" => "Faradio por metro",
            "simbol" => "F/m",
        ]);
        Unit::create([
            "code" => "A7",
            "name" => "Amperio por milímetro cuadrado",
            "simbol" => "A/mm²",
        ]);
        Unit::create([
            "code" => "A70",
            "name" => "Femtojoule",
            "simbol" => "fJ",
        ]);
        Unit::create([
            "code" => "A71",
            "name" => "Femtómetro",
            "description" => "Es la uncodead de longitud que equivale a una milbillónesima parte del metro.",
            "simbol" => "fm",
        ]);
        Unit::create([
            "code" => "A73",
            "name" => "Pie por segundo al cuadrado",
            "simbol" => "ft/s²",
        ]);
        Unit::create([
            "code" => "A74",
            "name" => "Pie libra-fuerza por segundo",
            "simbol" => "ft·lbf/s",
        ]);
        Unit::create([
            "code" => "A75",
            "name" => "Tonelada de carga",
            "description" => "Uncodead de información que normalmente se utiliza para la facturación, que se define como sea el número de toneladas métricas o el número de metros cúbicos, lo que sea mayor.",
        ]);
        Unit::create([
            "code" => "A76",
            "name" => "Galón",
            "description" => "Es una uncodead de volumen que se emplea en los países anglófonos (especialmente Estados Uncodeos) o con influencia de estos (como Liberia, Guatemala, Panamá, Honduras, Nicaragua, El Salvador, Colombia y parcialmente en México), para medir volúmenes de líqucodeos, principalmente la gasolina y su precio. Antiguamente, el volumen de un galón dependía de lo que se mcodeiera, y dónde. Sin embargo, en el siglo XIX existían dos definiciones de uso común: \"galón de vino\" (wine gallon) y \"galón de cerveza británico\" (ale gallon).",
            "simbol" => "Gal",
        ]);
        Unit::create([
            "code" => "A77",
            "name" => "Gaussian CGS (Centímetro-Gram-Segundo sistema) uncodead de desplazamiento",
        ]);
        Unit::create([
            "code" => "A78",
            "name" => "Gaussiano CGS (Centímetro-Gram-Segundo sistema) uncodead de corriente eléctrica",
        ]);
        Unit::create([
            "code" => "A79",
            "name" => "Gaussian CGS (Centímetro-Gram-Segundo sistema) uncodead de carga eléctrica",
        ]);
        Unit::create([
            "code" => "A8",
            "name" => "Amperio segundo",
            "simbol" => "A·s",
        ]);
        Unit::create([
            "code" => "A80",
            "name" => "Gaussiano CGS (Centímetro-Gram-Segundo sistema) uncodead de la fuerza del campo eléctrico",
        ]);
        Unit::create([
            "code" => "A81",
            "name" => "Gaussian CGS (Centímetro-Gram-Segundo sistema) uncodead de polarización eléctrica",
        ]);
        Unit::create([
            "code" => "A82",
            "name" => "Gaussiano CGS (Centímetro-Gram-Segundo sistema) uncodead de potencial eléctrico",
        ]);
        Unit::create([
            "code" => "A83",
            "name" => "Gaussian CGS (Centímetro-Gram-Segundo sistema) uncodead de magnetización",
        ]);
        Unit::create([
            "code" => "A84",
            "name" => "GigaCulombio por metro cúbico",
            "simbol" => "GC/m³",
        ]);
        Unit::create([
            "code" => "A85",
            "name" => "Gigaelectrónvoltio",
            "simbol" => "GeV",
        ]);
        Unit::create([
            "code" => "A86",
            "name" => "Gigahertz",
            "description" => "Es un múltiplo de la uncodead de medcodea de frecuencia hercio (Hz) y equivale a 109 (1 000 000 000) Hz. Por lo tanto, tiene un período de oscilación de 1 nanosegundo. Las ondas de radio con frecuencias cercanas al gigahercio se denominan microondas.",
            "simbol" => "GHz",
        ]);
        Unit::create([
            "code" => "A87",
            "name" => "GigaOhm",
            "simbol" => "GΩ",
        ]);
        Unit::create([
            "code" => "A88",
            "name" => "GigaOhm metro",
            "simbol" => "GΩ·m",
        ]);
        Unit::create([
            "code" => "A89",
            "name" => "Gigapascal",
            "simbol" => "GPa",
        ]);
        Unit::create([
            "code" => "A9",
            "name" => "Tarífa",
            "description" => "Uncodead de cantcodead expresada como una tasa para el uso de una instalación o servicio.",
        ]);
        Unit::create([
            "code" => "A90",
            "name" => "Gigawatt",
            "simbol" => "GW",
        ]);
        Unit::create([
            "code" => "A91",
            "name" => "Grado centesimal",
            "description" => "Sinónimo: grado\r\nEl grado centesimal o gon —también llamado gradián (plural: gradianes) y gonio — es una uncodead de medcodea de ángulos planos, alternativa al grado sexagesimal y al radián.",
            "simbol" => "gon",
        ]);
        Unit::create([
            "code" => "A93",
            "name" => "Gramo por metro cúbico",
            "simbol" => "g/m³",
        ]);
        Unit::create([
            "code" => "A94",
            "name" => "Gramo por Mol",
            "simbol" => "g/mol",
        ]);
        Unit::create([
            "code" => "A95",
            "name" => "Gray",
            "description" => "Es una uncodead derivada del Sistema Internacional de Uncodeades que mcodee la dosis absorbcodea de radiaciones ionizantes por un determinado material. Un Gray es equivalente a la absorción de un julio de energía ionizante por un kilogramo de material irradiado.",
            "simbol" => "Gy",
        ]);
        Unit::create([
            "code" => "A96",
            "name" => "Gray por segundo",
            "simbol" => "Gy/s",
        ]);
        Unit::create([
            "code" => "A97",
            "name" => "Hectopascal",
            "simbol" => "hPa",
        ]);
        Unit::create([
            "code" => "A98",
            "name" => "Henry por metro",
            "simbol" => "H/m",
        ]);
        Unit::create([
            "code" => "A99",
            "name" => "Bit",
            "description" => "Uncodead de información igual a un dígito binario.",
            "simbol" => "bit",
        ]);
        Unit::create([
            "code" => "AA",
            "name" => "Balón",
            "description" => "Uncodead de recuento para definir el número de bolas (Balón: objeto formado en la forma de esfera).",
        ]);
        Unit::create([
            "code" => "AB",
            "name" => "Paquete a granel",
            "description" => "Uncodead de recuento para definir el número de artículos por paquete a granel.",
            "simbol" => "pk",
        ]);
        Unit::create([
            "code" => "ACR",
            "name" => "Acre",
            "description" => "Es una medcodea de superficie, usada en agricultura en varios países.",
            "simbol" => "acre",
        ]);
        Unit::create([
            "code" => "ACT",
            "name" => "Activcodead",
            "description" => "Uncodead de recuento para definir el número de activcodeades (activcodead: una uncodead de trabajo o acción).",
        ]);
        Unit::create([
            "code" => "AD",
            "name" => "Byte",
            "description" => "Uncodead de información igual a 8 bits.",
            "simbol" => "byte",
        ]);
        Unit::create([
            "code" => "AE",
            "name" => "Amperio por metro",
            "description" => "(a veces llamado amperio vuelta por metro) es la uncodead SI de la corriente de campo magnético.",
            "simbol" => "A/m",
        ]);
        Unit::create([
            "code" => "AH",
            "name" => "Minuto adicional",
            "description" => "Uncodead de tiempo que define el número de minutos, además de los minutos referenciados.",
        ]);
        Unit::create([
            "code" => "AI",
            "name" => "Minuto y medio por llamada",
            "description" => "Uncodead de recuento para definir el número de minutos para el intervalo medio de una llamada.",
        ]);
        Unit::create([
            "code" => "AJ",
            "name" => "policía",
        ]);
        Unit::create([
            "code" => "AK",
            "name" => "Braza",
            "description" => "Una braza es una uncodead de longitud náutica, usada generalmente para medir la profundcodead del agua. Se llama braza porque equivale a la longitud de un par de brazos extendcodeos, aproximadamente dos metros, ó 6 pies en el sistema de medición estadouncodeense. Actualmente es conscodeerada arcaica e imprecisa.",
            "simbol" => "fth",
        ]);
        Unit::create([
            "code" => "AL",
            "name" => "Línea de acceso",
            "description" => "Uncodead de recuento para definir el número de líneas de acceso telefónico.",
        ]);
        Unit::create([
            "code" => "AMH",
            "name" => "Amperio hora",
            "description" => "Uncodead de carga electrica defincodea por la cantcodead de carga acumulada por un flujo constante de un amperio por 1 hora. ",
            "simbol" => "A·h",
        ]);
        Unit::create([
            "code" => "AMP",
            "name" => "Amperio",
            "description" => "Es la intenscodead de una corriente constante que manteniéndose en dos conductores paralelos, rectilíneos, de longitud infinita, de sección circular despreciable y situados a una distancia de un metro uno de otro en el vacío, produciría una fuerza igual a 2·10-7 newton por metro de longitud. ",
            "simbol" => "A",
        ]);
        Unit::create([
            "code" => "ANN",
            "name" => "Año",
            "description" => "Uncodead de tiempo equivalente a 365.25 días. ",
            "simbol" => "y",
        ]);
        Unit::create([
            "code" => "AP",
            "name" => "Libra de aluminio solamente",
        ]);
        Unit::create([
            "code" => "APZ",
            "name" => "Onza troy u onza farmacéutica ",
            "simbol" => "tr oz",
        ]);
        Unit::create([
            "code" => "AQ",
            "name" => "Uncodead del factir anti-hemofilico.",
            "description" => "Uncodead de medcodea para la potencia de la sangre (US).",
        ]);
        Unit::create([
            "code" => "AR",
            "name" => "supositorio",
        ]);
        Unit::create([
            "code" => "ARE",
            "name" => "Are",
            "description" => "Sinónimo: decametro cuadrado",
            "simbol" => "un",
        ]);
        Unit::create([
            "code" => "AS",
            "name" => "Variedad",
            "description" => "Uncodead de recuento para definir el número de surtcodeos (variedad: conjunto de elementos agrupados en una colección mixta).",
        ]);
        Unit::create([
            "code" => "ASM",
            "name" => "Grado alcohólico en masa",
            "description" => "Uncodead de masa que define el grado alcohólico de un líqucodeo.",
        ]);
        Unit::create([
            "code" => "ASU",
            "name" => "Grado alcohólico volumétrico",
            "description" => "Uncodead de volumen que define el grado alcohólico de un líqucodeo (por ejemplo, alcohol, vino, cerveza, etc.), a menudo a una temperatura específica.",
        ]);
        Unit::create([
            "code" => "ATM",
            "name" => "Atmósfera estándar",
            "description" => "Es un modelo de la atmósfera terrestre que permite obtener los valores de presión, temperatura, denscodead y viscoscodead del aire en función de la altitud. Su función es proporcionar un marco de referencia invariante para la navegación aérea y para la realización de cálculos aerodinámicos consistentes.",
            "simbol" => "atm",
        ]);
        Unit::create([
            "code" => "ATT",
            "name" => "Atmósfera técnica",
            "simbol" => "a",
        ]);
        Unit::create([
            "code" => "AW",
            "name" => "Relleno de polvo en viales",
        ]);
        Unit::create([
            "code" => "AWG",
            "name" => "Calibre de alambre americano",
            "description" => "También conoccodeo como el calibre del cable Brown & Sharpe , es un estandarizado calibre del cable sistema utilizado desde 1857 predominantemente en Norteamérica para los diámetros de vuelta, no ferroso,, sólcodeo eléctricamente conductor de alambre.",
            "simbol" => "AWG",
        ]);
        Unit::create([
            "code" => "AY",
            "name" => "Montaje",
            "description" => "Una uncodead de recuento de definir el número de conjuntos (montaje: artículos que consisten de partes componentes).",
        ]);
        Unit::create([
            "code" => "AZ",
            "name" => "Uncodead térmica británica (tabla internacional) por libra",
            "simbol" => "BtuIT/lb",
        ]);
        Unit::create([
            "code" => "B0",
            "name" => "Btu por pie cúbico",
            "simbol" => "BTU / ft³",
        ]);
        Unit::create([
            "code" => "B1",
            "name" => "Barril (EUA) por día",
            "simbol" => "barrel (US)/d",
        ]);
        Unit::create([
            "code" => "B10",
            "name" => "Bits por segundo",
            "description" => "Uncodead de información igual a un dígito binario por segundo.",
            "simbol" => "bit/s",
        ]);
        Unit::create([
            "code" => "B11",
            "name" => "Joule por kilogramo kelvin",
            "description" => "Es la capaccodead térmica másica de un cuerpo homogéneo de una masa de 1 kilogramo, en el que el aporte de una cantcodead de calor de un joule, produce una elevación de temperatura termodinámica de 1 kelvin. ",
            "simbol" => "J/(kg·K)",
        ]);
        Unit::create([
            "code" => "B12",
            "name" => "Joule por metro",
            "simbol" => "J/m",
        ]);
        Unit::create([
            "code" => "B13",
            "name" => "Joule por metro cuadrado",
            "description" => "Sinónimo: joule por metro cuadrado",
            "simbol" => "J/m²",
        ]);
        Unit::create([
            "code" => "B14",
            "name" => "Joule por metro a la cuarta potencia",
            "simbol" => "J/m⁴",
        ]);
        Unit::create([
            "code" => "B15",
            "name" => "Juole por Mol",
            "simbol" => "J/mol",
        ]);
        Unit::create([
            "code" => "B16",
            "name" => "Juoule por Mol kelvin",
            "simbol" => "J/(mol·K)",
        ]);
        Unit::create([
            "code" => "B17",
            "name" => "Crédito",
            "description" => "Uncodead de recuento de definir el número de entradas realizadas en el haber de una cuenta.",
        ]);
        Unit::create([
            "code" => "B18",
            "name" => "Segundos joule",
            "simbol" => "J·s",
        ]);
        Unit::create([
            "code" => "B19",
            "name" => "Dígito",
            "description" => "Uncodead de información que define la cantcodead de números utiliza para formar un número.",
        ]);
        Unit::create([
            "code" => "B2",
            "name" => "litera",
        ]);
        Unit::create([
            "code" => "B20",
            "name" => "Joule metro cuadrado por kologramo",
            "simbol" => "J·m²/kg",
        ]);
        Unit::create([
            "code" => "B21",
            "name" => "Kelvin por watt",
            "simbol" => "K/W",
        ]);
        Unit::create([
            "code" => "B22",
            "name" => "Kiloamperio",
            "simbol" => "kA",
        ]);
        Unit::create([
            "code" => "B23",
            "name" => "Kiloamperio por metro cuadrado",
            "simbol" => "kA/m²",
        ]);
        Unit::create([
            "code" => "B24",
            "name" => "Kiloamperio por metro",
            "simbol" => "kA/m",
        ]);
        Unit::create([
            "code" => "B25",
            "name" => "Kilobecquerel por metrocúbico",
            "simbol" => "kBq/kg",
        ]);
        Unit::create([
            "code" => "B26",
            "name" => "KiloCulombio",
            "simbol" => "kC",
        ]);
        Unit::create([
            "code" => "B27",
            "name" => "KiloCulombio por metro cúbico",
            "simbol" => "kC/m³",
        ]);
        Unit::create([
            "code" => "B28",
            "name" => "KiloCulombio por metro cuadrado",
            "simbol" => "kC/m²",
        ]);
        Unit::create([
            "code" => "B29",
            "name" => "Kiloelectrónvoltio",
            "simbol" => "keV",
        ]);
        Unit::create([
            "code" => "B3",
            "name" => "Libra de bateo",
            "description" => "Uncodead de masa que define el número de libras de fibra acolchada.",
        ]);
        Unit::create([
            "code" => "B30",
            "name" => "Gibibit",
            "description" => "Uncodead de información igual a 2³⁰ los bits (dígitos binarios).",
            "simbol" => "Gibit",
        ]);
        Unit::create([
            "code" => "B31",
            "name" => "Kilogramo metro por segundo",
            "simbol" => "kg·m/s",
        ]);
        Unit::create([
            "code" => "B32",
            "name" => "Kilogramo metro cuadrado",
            "simbol" => "kg·m²",
        ]);
        Unit::create([
            "code" => "B33",
            "name" => "Kilogramo metro cuadrado por segundo",
            "simbol" => "kg·m²/s",
        ]);
        Unit::create([
            "code" => "B34",
            "name" => "Kilogramo por decímetro cúbico",
            "simbol" => "kg/dm³",
        ]);
        Unit::create([
            "code" => "B35",
            "name" => "Kilogramo por litro",
            "simbol" => "kg/l or kg/L",
        ]);
        Unit::create([
            "code" => "B36",
            "name" => "Calorías (termoquímicas) por gramo",
            "simbol" => "cal th / g",
        ]);
        Unit::create([
            "code" => "B37",
            "name" => "Kilogramo de fuerza",
            "simbol" => "Kgf",
        ]);
        Unit::create([
            "code" => "B38",
            "name" => "Kilogramo-metro de la fuerza",
            "simbol" => "Kgf · m",
        ]);
        Unit::create([
            "code" => "B39",
            "name" => "Kilogramo-fuerza del metro por segundo",
            "simbol" => "Kgf · m / s",
        ]);
        Unit::create([
            "code" => "B4",
            "name" => "Barril, uncodead imperial",
            "description" => "Uncodead de volumen utilizado para medir cerveza. Un barril de cerveza es igual a 36 galones imperiales.",
        ]);
        Unit::create([
            "code" => "B40",
            "name" => "Kilogramo de fuerza por metro cuadrado",
            "simbol" => "Kgf / m²",
        ]);
        Unit::create([
            "code" => "B41",
            "name" => "Kilojoule por kelvin",
            "simbol" => "kJ/K",
        ]);
        Unit::create([
            "code" => "B42",
            "name" => "Kilojoule por kilogramo",
            "simbol" => "kJ/kg",
        ]);
        Unit::create([
            "code" => "B43",
            "name" => "Kilojoule por kilogramo kelvin",
            "simbol" => "kJ/(kg·K)",
        ]);
        Unit::create([
            "code" => "B44",
            "name" => "Kilojoule por Mol ",
            "simbol" => "kJ/mol",
        ]);
        Unit::create([
            "code" => "B45",
            "name" => "KiloMol",
            "simbol" => "kmol",
        ]);
        Unit::create([
            "code" => "B46",
            "name" => "KiloMol por metro cúbico",
            "simbol" => "kmol/m³",
        ]);
        Unit::create([
            "code" => "B47",
            "name" => "Kilonewton",
            "simbol" => "kN",
        ]);
        Unit::create([
            "code" => "B48",
            "name" => "Kilonewton metro",
            "simbol" => "kN·m",
        ]);
        Unit::create([
            "code" => "B49",
            "name" => "KiloOhm",
            "simbol" => "kΩ",
        ]);
        Unit::create([
            "code" => "B5",
            "name" => "palanquilla",
        ]);
        Unit::create([
            "code" => "B50",
            "name" => "KiloOhm metro",
            "simbol" => "kΩ·m",
        ]);
        Unit::create([
            "code" => "B51",
            "name" => "KiloLibra",
            "description" => "Sinónimo: Kilogramo-fuerza",
            "simbol" => "Kp",
        ]);
        Unit::create([
            "code" => "B52",
            "name" => "Kilosegundo",
            "simbol" => "ks",
        ]);
        Unit::create([
            "code" => "B53",
            "name" => "Kilosiemens",
            "simbol" => "kS",
        ]);
        Unit::create([
            "code" => "B54",
            "name" => "Kilosiemens por metro",
            "simbol" => "kS/m",
        ]);
        Unit::create([
            "code" => "B55",
            "name" => "Kilovoltio por metro",
            "simbol" => "kV/m",
        ]);
        Unit::create([
            "code" => "B56",
            "name" => "Kiloweber por metro",
            "simbol" => "kWb/m",
        ]);
        Unit::create([
            "code" => "B57",
            "name" => "Año luz",
            "description" => "Uncodead de longitud que conscodeera la distancia a la que viaja la luz en el vacío en un año.",
            "simbol" => "ly",
        ]);
        Unit::create([
            "code" => "B58",
            "name" => "Litro por Mol",
            "simbol" => "l/mol",
        ]);
        Unit::create([
            "code" => "B59",
            "name" => "Lumen hora",
            "simbol" => "lm·h",
        ]);
        Unit::create([
            "code" => "B6",
            "name" => "Bollo",
        ]);
        Unit::create([
            "code" => "B60",
            "name" => "Lumen por metro cuadrado",
            "simbol" => "lm/m²",
        ]);
        Unit::create([
            "code" => "B61",
            "name" => "Luminoscodead por watt",
            "simbol" => "lm/W",
        ]);
        Unit::create([
            "code" => "B62",
            "name" => "Lumen segundo",
            "simbol" => "lm·s",
        ]);
        Unit::create([
            "code" => "B63",
            "name" => "Hora de luz",
            "simbol" => "lx·h",
        ]);
        Unit::create([
            "code" => "B64",
            "name" => "Segundo de luz",
            "simbol" => "lx·s",
        ]);
        Unit::create([
            "code" => "B65",
            "name" => "Maxwell",
            "simbol" => "Mx",
        ]);
        Unit::create([
            "code" => "B66",
            "name" => "Megaamperio por metro cuadrado",
            "simbol" => "MA/m²",
        ]);
        Unit::create([
            "code" => "B67",
            "name" => "Megabecquerel por kilogramo",
            "simbol" => "MBq/kg",
        ]);
        Unit::create([
            "code" => "B68",
            "name" => "Gigabit",
            "description" => "Uncodead de información igual a 10⁹ los bits (dígitos binarios).",
            "simbol" => "Gbit",
        ]);
        Unit::create([
            "code" => "B69",
            "name" => "MegaCulombio por metro cúbico",
            "simbol" => "MC/m³",
        ]);
        Unit::create([
            "code" => "B7",
            "name" => "Ciclo",
            "description" => "Uncodead de recuento de definir el número de ciclos (ciclo: un período recurrente de duración defincodea).",
        ]);
        Unit::create([
            "code" => "B70",
            "name" => "MegaCulombio por metro cuadrado",
            "simbol" => "MC/m²",
        ]);
        Unit::create([
            "code" => "B71",
            "name" => "Megaelectrónvoltio",
            "simbol" => "MeV",
        ]);
        Unit::create([
            "code" => "B72",
            "name" => "Megagramo por metro cúbico",
            "simbol" => "Mg/m³",
        ]);
        Unit::create([
            "code" => "B73",
            "name" => "Meganewton",
            "simbol" => "MN",
        ]);
        Unit::create([
            "code" => "B74",
            "name" => "Meganewton metro",
            "simbol" => "MN·m",
        ]);
        Unit::create([
            "code" => "B75",
            "name" => "MegaOhm",
            "simbol" => "MΩ",
        ]);
        Unit::create([
            "code" => "B76",
            "name" => "MegaOhm metro",
            "simbol" => "MΩ·m",
        ]);
        Unit::create([
            "code" => "B77",
            "name" => "Megasiemens por metro",
            "simbol" => "MS/m",
        ]);
        Unit::create([
            "code" => "B78",
            "name" => "Megavoltio ",
            "simbol" => "MV",
        ]);
        Unit::create([
            "code" => "B79",
            "name" => "Megavoltio por metro",
            "simbol" => "MV/m",
        ]);
        Unit::create([
            "code" => "B8",
            "name" => "Joule por metro cúbico",
            "simbol" => "J/m³",
        ]);
        Unit::create([
            "code" => "B80",
            "name" => "Gigabit por segundo",
            "description" => "Uncodead de información igual a 10⁹ bits (dígitos binarios) por segundo.",
            "simbol" => "Gbit/s",
        ]);
        Unit::create([
            "code" => "B81",
            "name" => "Reciproccodead del metro cuadrado, reciproccodead del segundo",
            "simbol" => "m⁻²/s",
        ]);
        Unit::create([
            "code" => "B82",
            "name" => "Pulgadas por pie lineal",
            "description" => "Uncodead de longitud que define el número de pulgadas por pie lineal.",
        ]);
        Unit::create([
            "code" => "B83",
            "name" => "Metro a la cuarta potencia",
            "simbol" => "m⁴",
        ]);
        Unit::create([
            "code" => "B84",
            "name" => "Microamperio",
            "simbol" => "µA",
        ]);
        Unit::create([
            "code" => "B85",
            "name" => "Microbar",
            "simbol" => "µbar",
        ]);
        Unit::create([
            "code" => "B86",
            "name" => "MicroCulombio",
            "simbol" => "µC",
        ]);
        Unit::create([
            "code" => "B87",
            "name" => "MicroCulombio por metro cúbico",
            "simbol" => "µC/m³",
        ]);
        Unit::create([
            "code" => "B88",
            "name" => "MicroCulombio por metro cuadrado",
            "simbol" => "µC/m²",
        ]);
        Unit::create([
            "code" => "B89",
            "name" => "Microfaradio por metro",
            "simbol" => "µF/m",
        ]);
        Unit::create([
            "code" => "B9",
            "name" => "Batt",
        ]);
        Unit::create([
            "code" => "B90",
            "name" => "Microhenry",
            "simbol" => "µH",
        ]);
        Unit::create([
            "code" => "B91",
            "name" => "Microhenry por metro",
            "simbol" => "µH/m",
        ]);
        Unit::create([
            "code" => "B92",
            "name" => "Micronewton",
            "simbol" => "µN",
        ]);
        Unit::create([
            "code" => "B93",
            "name" => "Micronewton metro",
            "simbol" => "µN·m",
        ]);
        Unit::create([
            "code" => "B94",
            "name" => "Micro Ohm",
            "simbol" => "µΩ",
        ]);
        Unit::create([
            "code" => "B95",
            "name" => "MicroOhm metro",
            "simbol" => "µΩ·m",
        ]);
        Unit::create([
            "code" => "B96",
            "name" => "Micropascal",
            "simbol" => "µPa",
        ]);
        Unit::create([
            "code" => "B97",
            "name" => "Microrradián",
            "description" => "Uncodead de distancia angular igual a una milésima de milliradian. Uncodead angular - una uncodead de medcodea para ángulos.",
            "simbol" => "µrad",
        ]);
        Unit::create([
            "code" => "B98",
            "name" => "Microsegundo",
            "simbol" => "µs",
        ]);
        Unit::create([
            "code" => "B99",
            "name" => "Microsiemens",
            "simbol" => "µS",
        ]);
        Unit::create([
            "code" => "BAR",
            "name" => "Bar Unit::create([uncodead de presión]",
            "description" => "Se denomina bar a una uncodead de presión equivalente a un millón de barias, aproximadamente igual a una atmósfera (1 atm). Su símbolo es «bar».",
            "simbol" => "bar",
        ]);
        Unit::create([
            "code" => "BB",
            "name" => "Caja base",
            "description" => "Una uncodead de área de 112 hojas de productos de estaño (placa de estaño, acero libre de estaño o placa negra) 14 por 20 pulgadas o 31,360 pulgadas cuadradas.",
        ]);
        Unit::create([
            "code" => "BFT",
            "name" => "Tablero de pies",
            "description" => "Uncodead de medcodea para el volumen de la madera en el Estados Uncodeos y Canadá . Es el volumen de una longitud de un pie de una placa de un pie de ancho y una pulgada de grosor.",
            "simbol" => "fbm",
        ]);
        Unit::create([
            "code" => "BH",
            "name" => "Cepillo",
        ]);
        Unit::create([
            "code" => "BHP",
            "name" => "Potencia al freno",
            "simbol" => "BHP",
        ]);
        Unit::create([
            "code" => "BIL",
            "name" => "Billon",
            "description" => "Sinonimo: Trillon en EUA.",
        ]);
        Unit::create([
            "code" => "BLD",
            "name" => "Barril seco (EUA)",
            "simbol" => "bbl (US)",
        ]);
        Unit::create([
            "code" => "BLL",
            "name" => "Barril (EUA)",
            "description" => "Un barril estadouncodeense es igual a:\r\n\r\n42 galones estadouncodeenses\r\n168 cuartos estadouncodeenses\r\n336 pintas estadouncodeenses\r\n1344 gills estadouncodeenses\r\n5376 onzas líqucodeas estadouncodeenses\r\n158.987294928 litros",
            "simbol" => "barrel (US)",
        ]);
        Unit::create([
            "code" => "BP",
            "name" => "Tabledo de cien pies",
        ]);
        Unit::create([
            "code" => "BPM",
            "name" => "Latcodeos por minuto",
            "description" => "El número de latcodeos por minuto.",
            "simbol" => "BPM",
        ]);
        Unit::create([
            "code" => "BQL",
            "name" => "Becquerel",
            "description" => "Es la activcodead de una fuente radiactiva en la que se desintegra un núcleo por segundo en un dado instante.",
            "simbol" => "Bq",
        ]);
        Unit::create([
            "code" => "BTU",
            "name" => "Uncodead térmica británica (tabla internacional)",
            "simbol" => "BtuIT",
        ]);
        Unit::create([
            "code" => "BUA",
            "name" => "Bushel (EUA)",
            "description" => "El bushel es una uncodead de medcodea de capaccodead para mercancía sólcodea en los países anglosajones (países de habla inglesa). Se utiliza en el comercio de granos, harinas y otros productos análogos.",
            "simbol" => "bu (US)",
        ]);
        Unit::create([
            "code" => "BUI",
            "name" => "Bushel (UK)",
            "description" => "Un bushel tiene 4 pecks o 32 quarts, y equivale a 1,03205 del bushel de los Estados Uncodeos, que a su vez equivale a 0,35238 hectolitros. La palabra bushel está cayendo en desuso rápcodeamente.",
            "simbol" => "bushel (UK)",
        ]);
        Unit::create([
            "code" => "BW",
            "name" => "Peso base",
        ]);
        Unit::create([
            "code" => "BZ",
            "name" => "Millones de BTUs",
        ]);
        Unit::create([
            "code" => "C0",
            "name" => "Llamada",
            "description" => "Una uncodead de recuento de definir el número de llamadas (call: sesión de comunicación o de visita).",
        ]);
        Unit::create([
            "code" => "C1",
            "name" => "Libra de producto compuesto (peso total)",
        ]);
        Unit::create([
            "code" => "C10",
            "name" => "Milifaradio",
            "simbol" => "mF",
        ]);
        Unit::create([
            "code" => "C11",
            "name" => "Miligalón",
            "simbol" => "mGal",
        ]);
        Unit::create([
            "code" => "C12",
            "name" => "Miligramo por metro",
            "simbol" => "mg/m",
        ]);
        Unit::create([
            "code" => "C13",
            "name" => "MilliGray",
            "simbol" => "mGy",
        ]);
        Unit::create([
            "code" => "C14",
            "name" => "Milihenry",
            "simbol" => "mH",
        ]);
        Unit::create([
            "code" => "C15",
            "name" => "Milijoule",
            "simbol" => "mJ",
        ]);
        Unit::create([
            "code" => "C16",
            "name" => "Milímetro por segundo",
            "simbol" => "mm/s",
        ]);
        Unit::create([
            "code" => "C17",
            "name" => "Milímetro cuadrado por segundo",
            "simbol" => "mm²/s",
        ]);
        Unit::create([
            "code" => "C18",
            "name" => "MiliMol",
            "simbol" => "mmol",
        ]);
        Unit::create([
            "code" => "C19",
            "name" => "Mol por kilogramo",
            "simbol" => "mol/kg",
        ]);
        Unit::create([
            "code" => "C2",
            "name" => "Carset",
        ]);
        Unit::create([
            "code" => "C20",
            "name" => "Milinewton",
            "simbol" => "mN",
        ]);
        Unit::create([
            "code" => "C21",
            "name" => "Kibibit",
            "description" => "Uncodead de información igual a 2¹⁰ (1024) bits (dígitos binarios).",
            "simbol" => "Kibit",
        ]);
        Unit::create([
            "code" => "C22",
            "name" => "Milinewton por metro",
            "simbol" => "mN/m",
        ]);
        Unit::create([
            "code" => "C23",
            "name" => "MiliOhm metro",
            "simbol" => "mΩ·m",
        ]);
        Unit::create([
            "code" => "C24",
            "name" => "Milipascal segundo",
            "simbol" => "mPa·s",
        ]);
        Unit::create([
            "code" => "C25",
            "name" => "Milirradián",
            "description" => "Es una uncodead derivada sistema internacional para la medición angular , que se define como una milésima parte de un radián (0,001 radianes).",
            "simbol" => "mrad",
        ]);
        Unit::create([
            "code" => "C26",
            "name" => "Milisegundo",
            "simbol" => "ms",
        ]);
        Unit::create([
            "code" => "C27",
            "name" => "Milisiemens",
            "simbol" => "mS",
        ]);
        Unit::create([
            "code" => "C28",
            "name" => "MilliSievert",
            "simbol" => "mSv",
        ]);
        Unit::create([
            "code" => "C29",
            "name" => "Militesla",
            "simbol" => "mT",
        ]);
        Unit::create([
            "code" => "C3",
            "name" => "Microvoltios por metro",
            "simbol" => "µV/m",
        ]);
        Unit::create([
            "code" => "C30",
            "name" => "Milivoltio por metro",
            "simbol" => "mV/m",
        ]);
        Unit::create([
            "code" => "C31",
            "name" => "Miliwatt",
            "simbol" => "mW",
        ]);
        Unit::create([
            "code" => "C32",
            "name" => "Miliwatt por metro cuadrado",
            "description" => "Es equivalente a una milésima de vatio.",
            "simbol" => "mW/m²",
        ]);
        Unit::create([
            "code" => "C33",
            "name" => "Miliweber",
            "simbol" => "mWb",
        ]);
        Unit::create([
            "code" => "C34",
            "name" => "Mol",
            "description" => "Es la cantcodead de sustancia de un sistema que contiene tantas entcodeades elementales como átomos hay en 0,012 kilogramos de carbono 12. ",
            "simbol" => "mol",
        ]);
        Unit::create([
            "code" => "C35",
            "name" => "Mol por decimetro cúbico",
            "simbol" => "mol/dm³",
        ]);
        Unit::create([
            "code" => "C36",
            "name" => "Mol por metro cúbico",
            "simbol" => "mol/m³",
        ]);
        Unit::create([
            "code" => "C37",
            "name" => "Kilobits",
            "description" => "Uncodead de información igual a 10³(1000) bits (dígitos binarios).",
            "simbol" => "kbit",
        ]);
        Unit::create([
            "code" => "C38",
            "name" => "Mol por litro",
            "simbol" => "mol/l",
        ]);
        Unit::create([
            "code" => "C39",
            "name" => "Nanoamperio",
            "simbol" => "nA",
        ]);
        Unit::create([
            "code" => "C4",
            "name" => "partcodeo de carga",
        ]);
        Unit::create([
            "code" => "C40",
            "name" => "NanoCulombio",
            "simbol" => "nC",
        ]);
        Unit::create([
            "code" => "C41",
            "name" => "Nanofaradio",
            "simbol" => "nF",
        ]);
        Unit::create([
            "code" => "C42",
            "name" => "Nanofaradio por metro",
            "simbol" => "nF/m",
        ]);
        Unit::create([
            "code" => "C43",
            "name" => "Nanohenry",
            "simbol" => "nH",
        ]);
        Unit::create([
            "code" => "C44",
            "name" => "Nanohenry por metro",
            "simbol" => "nH/m",
        ]);
        Unit::create([
            "code" => "C45",
            "name" => "Nanómetro",
            "description" => "Medcodea de longitud que equivale a la milmillonésima parte del metro.",
            "simbol" => "nm",
        ]);
        Unit::create([
            "code" => "C46",
            "name" => "NanoOhm metro",
            "simbol" => "nΩ·m",
        ]);
        Unit::create([
            "code" => "C47",
            "name" => "Nanosegundo",
            "simbol" => "ns",
        ]);
        Unit::create([
            "code" => "C48",
            "name" => "Nanotesla",
            "simbol" => "nT",
        ]);
        Unit::create([
            "code" => "C49",
            "name" => "Nanowatt",
            "simbol" => "nW",
        ]);
        Unit::create([
            "code" => "C5",
            "name" => "Costo",
        ]);
        Unit::create([
            "code" => "C50",
            "name" => "Neperio",
            "description" => "El neper o neperio es una uncodead de medcodea relativa que se utiliza frecuentemente en el campo de la telecomunicación, para expresar relaciones entre voltajes o intenscodeades.",
            "simbol" => "Np",
        ]);
        Unit::create([
            "code" => "C51",
            "name" => "Neperio por segundo",
            "simbol" => "Np/s",
        ]);
        Unit::create([
            "code" => "C52",
            "name" => "Picómetro",
            "description" => "Es una uncodead de longitud del SI que equivale a una billonésima (0,000 000 000 001 o 1×10-12) parte de un metro.",
            "simbol" => "pm",
        ]);
        Unit::create([
            "code" => "C53",
            "name" => "Newton metro segundo",
            "simbol" => "N·m·s",
        ]);
        Unit::create([
            "code" => "C54",
            "name" => "Newton metro cuadrado por kilogramo cuadrado",
            "simbol" => "N·m²/kg²",
        ]);
        Unit::create([
            "code" => "C55",
            "name" => "Newton por metro cuadrado",
            "simbol" => "N/m²",
        ]);
        Unit::create([
            "code" => "C56",
            "name" => "Newton por milimetro cuadrado",
            "simbol" => "N/mm²",
        ]);
        Unit::create([
            "code" => "C57",
            "name" => "Newton segundo",
            "simbol" => "N·s",
        ]);
        Unit::create([
            "code" => "C58",
            "name" => "Segundos newton por metro",
            "simbol" => "N·s/m",
        ]);
        Unit::create([
            "code" => "C59",
            "name" => "Octava",
            "description" => "Una uncodead utilizada en la música para describir la relación de la frecuencia entre las notas.",
        ]);
        Unit::create([
            "code" => "C6",
            "name" => "celda",
        ]);
        Unit::create([
            "code" => "C60",
            "name" => "Ohm centímetro",
            "simbol" => "Ω·cm",
        ]);
        Unit::create([
            "code" => "C61",
            "name" => "Ohm metro",
            "simbol" => "Ω·m",
        ]);
        Unit::create([
            "code" => "C62",
            "name" => "Uno",
            "description" => "Sinónimo: uncodead",
            "simbol" => "1",
        ]);
        Unit::create([
            "code" => "C63",
            "name" => "Pársec",
            "description" => "Es una uncodead de medcodea astronómica bastante utilizada para calcular grandes distancias entre objetos. ",
            "simbol" => "pc",
        ]);
        Unit::create([
            "code" => "C64",
            "name" => "Pascal por kelvin",
            "simbol" => "Pa/K",
        ]);
        Unit::create([
            "code" => "C65",
            "name" => "Pascal segundo",
            "description" => "Es la viscoscodead dinámica de un flucodeo homogéneo, en el cual, el movimiento rectilíneo y uniforme de una superficie plana de 1 metro cuadrado, da lugar a una fuerza retardatriz de 1 newton, cuando hay una diferencia de veloccodead de 1 metro por segundo entre dos planos paralelos separados por 1 metro de distancia.",
            "simbol" => "Pa·s",
        ]);
        Unit::create([
            "code" => "C66",
            "name" => "Segundos pascal por metro cúbico",
            "simbol" => "Pa·s/m³",
        ]);
        Unit::create([
            "code" => "C67",
            "name" => "Segundos pascal por metro ",
            "simbol" => "Pa· s/m",
        ]);
        Unit::create([
            "code" => "C68",
            "name" => "Petajoule",
            "simbol" => "PJ",
        ]);
        Unit::create([
            "code" => "C69",
            "name" => "Phon",
            "description" => "Uncodead de volumen del soncodeo subjetivo. Un soncodeo tiene p phons de sonorcodead si se parece al oyente a ser iguales en intenscodead, con el soncodeo de un tono puro de frecuencia 1 kilohertz y de la fuerza p decibelios.",
        ]);
        Unit::create([
            "code" => "C7",
            "name" => "Centipoise",
            "simbol" => "cP",
        ]);
        Unit::create([
            "code" => "C70",
            "name" => "Picoamperio",
            "simbol" => "pA",
        ]);
        Unit::create([
            "code" => "C71",
            "name" => "PicoCulombio",
            "simbol" => "pC",
        ]);
        Unit::create([
            "code" => "C72",
            "name" => "Picofaradio por metro",
            "simbol" => "pF/m",
        ]);
        Unit::create([
            "code" => "C73",
            "name" => "Picohenry",
            "simbol" => "pH",
        ]);
        Unit::create([
            "code" => "C74",
            "name" => "Kilobits por segundo",
            "description" => "Uncodead de información igual a 10 ³  (1000) bits (dígitos binarios) por segundo.",
            "simbol" => "kbit/s",
        ]);
        Unit::create([
            "code" => "C75",
            "name" => "Picowatt",
            "simbol" => "pW",
        ]);
        Unit::create([
            "code" => "C76",
            "name" => "Picowatt  por metro cuadrado",
            "description" => "Es igual a la trillonésima parte de un vatio (10−12).",
            "simbol" => "pW/m²",
        ]);
        Unit::create([
            "code" => "C77",
            "name" => "Calibre de libra",
        ]);
        Unit::create([
            "code" => "C78",
            "name" => "Libra fuerza",
            "simbol" => "lbf",
        ]);
        Unit::create([
            "code" => "C79",
            "name" => "Kilovoltios horas amperios",
            "description" => "Uncodead de energía acumulada de 1000 amperios voltioios durante un período de una hora.",
            "simbol" => "kVAh",
        ]);
        Unit::create([
            "code" => "C8",
            "name" => "MilliCulombio por kilogramo",
            "simbol" => "mC/kg",
        ]);
        Unit::create([
            "code" => "C80",
            "name" => "Rad",
            "simbol" => "rad",
        ]);
        Unit::create([
            "code" => "C81",
            "name" => "Radián",
            "description" => "Es la uncodead de medcodea de un ángulo con vértice en el centro de un círculo cuyos lados son cortados por el arco de la circunferencia, y que además dicho arco tiene una longitud igual a la del radio.",
            "simbol" => "rad",
        ]);
        Unit::create([
            "code" => "C82",
            "name" => "Radianmetro cuadrado por Mol",
            "simbol" => "rad·m²/mol",
        ]);
        Unit::create([
            "code" => "C83",
            "name" => "Rradian metro cuadrado por kilogramo",
            "simbol" => "rad·m²/kg",
        ]);
        Unit::create([
            "code" => "C84",
            "name" => "Radían por metro",
            "simbol" => "rad/m",
        ]);
        Unit::create([
            "code" => "C85",
            "name" => "Reciproccodead Ámstrong",
            "simbol" => "Å⁻¹",
        ]);
        Unit::create([
            "code" => "C86",
            "name" => "Reciproccodead del metro cúbico",
            "simbol" => "m⁻³",
        ]);
        Unit::create([
            "code" => "C87",
            "name" => "Reciproccodead metro cúbico por segundo",
            "description" => "Sinonimo: Reciproccodead del segundo por metro cúbico.",
            "simbol" => "m⁻³/s",
        ]);
        Unit::create([
            "code" => "C88",
            "name" => "Recíproco joule por metro cúbico",
            "simbol" => "eV⁻¹/m³",
        ]);
        Unit::create([
            "code" => "C89",
            "name" => "Henry recíproco",
            "simbol" => "H⁻¹",
        ]);
        Unit::create([
            "code" => "C9",
            "name" => "Grupo bobinas",
            "description" => "Uncodead de conteo que define el número de grupos de bobinas (grupo bobina: grupos de elementos dispuestos por longitudes de los objetos colocados en una secuencia de círculos concéntricos uncodeo).",
        ]);
        Unit::create([
            "code" => "C90",
            "name" => "Recíproco Henry",
            "simbol" => "J⁻¹/m³",
        ]);
        Unit::create([
            "code" => "C91",
            "name" => "Recíproccodead de kelvin ó kelvin a la potencia menos 1",
            "simbol" => "K⁻¹",
        ]);
        Unit::create([
            "code" => "C92",
            "name" => "Reciproccodead Metro",
            "simbol" => "m⁻¹",
        ]);
        Unit::create([
            "code" => "C93",
            "name" => "Reciproccodead Metro cuadrado",
            "description" => "Sinónimo: Reciproccodead de metro cuadrado",
            "simbol" => "m⁻²",
        ]);
        Unit::create([
            "code" => "C94",
            "name" => "Reciproccodead Minuto",
            "simbol" => "min⁻¹",
        ]);
        Unit::create([
            "code" => "C95",
            "name" => "Reciproccodead Mol",
            "description" => "Es una propiedad física defincodea como su masa por uncodead de cantcodead de sustancia.",
            "simbol" => "mol⁻¹",
        ]);
        Unit::create([
            "code" => "C96",
            "name" => "Reciproccodead Pascal o pascal a la potencia menos 1 ",
            "simbol" => "Pa⁻¹",
        ]);
        Unit::create([
            "code" => "C97",
            "name" => "Reciproccodead Segundo",
            "simbol" => "s⁻¹",
        ]);
        Unit::create([
            "code" => "C98",
            "name" => "Segundo recíproco por metro cúbico",
            "simbol" => "S $ ^ Unit::create([1] $ / m $ ³ $",
        ]);
        Unit::create([
            "code" => "C99",
            "name" => "Reciproccodead Segundo por metro cuadrado",
            "simbol" => "s⁻¹/m²",
        ]);
        Unit::create([
            "code" => "CCT",
            "name" => "Capaccodead de carga en toneladas métricas",
            "description" => "Uncodead de masa que define la capaccodead de carga, expresada como el número de toneladas métricas.",
        ]);
        Unit::create([
            "code" => "CDL",
            "name" => "Candela",
            "description" => "La candela es una de las uncodeades básicas del Sistema Internacional, de intenscodead luminosa.",
            "simbol" => "cd",
        ]);
        Unit::create([
            "code" => "CE",
            "name" => "Cada mes",
        ]);
        Unit::create([
            "code" => "CEL",
            "name" => "Grados celsius",
            "description" => "Consulte ISO 80000-5 (Cantcodeades y uncodeades - Parte 5: Termodinámica)",
            "simbol" => "°C",
        ]);
        Unit::create([
            "code" => "CEN",
            "name" => "Centenar",
            "description" => "Una uncodead de recuento de definir el número de uncodeades en múltiplos de 100.",
        ]);
        Unit::create([
            "code" => "CG",
            "name" => "Tarjeta",
            "description" => "Uncodead de conteo que define el número de uncodeades de la tarjeta (tarjeta: papel rígcodeo grueso o cartón).",
        ]);
        Unit::create([
            "code" => "CGM",
            "name" => "Centígramo",
            "simbol" => "cg",
        ]);
        Unit::create([
            "code" => "CK",
            "name" => "Conector",
        ]);
        Unit::create([
            "code" => "CKG",
            "name" => "Culombio por kilogramo",
            "simbol" => "C/kg",
        ]);
        Unit::create([
            "code" => "CLF",
            "name" => "Cientos de hojas",
            "description" => "Una uncodead de recuento de definir el número de hojas, expresado en uncodeades de cien hojas.",
        ]);
        Unit::create([
            "code" => "CLT",
            "name" => "Centilitro",
            "description" => "Medcodea de volumen, de símbolo cl, que es igual a la centésima parte de un litro.",
            "simbol" => "cl",
        ]);
        Unit::create([
            "code" => "CMK",
            "name" => "Centímetro cuadrado",
            "description" => "Medcodea de longitud, de símbolo cm, que es igual a la centésima parte de un metro.",
            "simbol" => "cm²",
        ]);
        Unit::create([
            "code" => "CMQ",
            "name" => "Centímetro cúbico",
            "description" => "Medcodea de longitud, de símbolo cm, que es igual a la centésima parte de un metro.",
            "simbol" => "cm³",
        ]);
        Unit::create([
            "code" => "CMT",
            "name" => "Centímetro",
            "description" => "Es una uncodead de longitud. Es el segundo submúltiplo del metro y equivale a la centésima parte de él.",
            "simbol" => "cm",
        ]);
        Unit::create([
            "code" => "CNP",
            "name" => "Cientos de paquetes",
            "description" => "Uncodead de recuento para definir el número de cientos de paquetes (cien paquete: conjunto de un centenar de artículos empaquetados juntos).",
        ]);
        Unit::create([
            "code" => "CNT",
            "name" => "Cental (UK)",
            "description" => "Una uncodead de masa igual a cien  kilos (EUA).",
        ]);
        Unit::create([
            "code" => "COU",
            "name" => "Culombio",
            "description" => "Es la cantcodead de electriccodead transportada en 1 segundo por una corriente de intenscodead 1 amperio. ",
            "simbol" => "C",
        ]);
        Unit::create([
            "code" => "CTG",
            "name" => "Contencodeo en gramos",
            "description" => "Uncodead de masa que define el número de gramos de un elemento con nombre en un producto.",
        ]);
        Unit::create([
            "code" => "CTM",
            "name" => "Quilatage métrico",
            "description" => "Es una uncodead de masa igual a 200  mg y se utiliza para la medición de las piedras preciosas y perlas .",
        ]);
        Unit::create([
            "code" => "CTN",
            "name" => "Tonelada de contencodeo (métrica)",
            "description" => "Uncodead de masa que define el número de toneladas métricas de un elemento con nombre en un producto.",
        ]);
        Unit::create([
            "code" => "CUR",
            "name" => "Curie",
            "description" => "El Curie (Ci) es la uncodead antigua de medcodea de radiactivcodead, defincodea como la activcodead de in gramo del isótopo Ra-226, su equivalencia es: 1Ci = 3,7 1010 Bq.",
            "simbol" => "Ci",
        ]);
        Unit::create([
            "code" => "CWA",
            "name" => "Hundred pound",
            "simbol" => "cwt (US)",
        ]);
        Unit::create([
            "code" => "CWI",
            "name" => "Hundredweight",
            "simbol" => "cwt (UK)",
        ]);
        Unit::create([
            "code" => "CZ",
            "name" => "Combo",
        ]);
        Unit::create([
            "code" => "D03",
            "name" => "Kilovatio hora por hora",
            "description" => "Uncodead de energía acumulada en mil vatios durante un período de una hora.",
            "simbol" => "kW·h/h",
        ]);
        Unit::create([
            "code" => "D04",
            "name" => "Lot Unit::create([uncodead de peso]",
            "description" => "Uncodead de peso igual a aproximadamente media onza o 15 gramos.",
        ]);
        Unit::create([
            "code" => "D1",
            "name" => "Segundo recíproco por estereorradián",
            "simbol" => "s⁻¹/sr",
        ]);
        Unit::create([
            "code" => "D10",
            "name" => "Siemens por metro",
            "simbol" => "S/m",
        ]);
        Unit::create([
            "code" => "D11",
            "name" => "Mebibit",
            "description" => "Una uncodead de información igual a 2²⁰ (1048576) bits (dígitos binarios).",
            "simbol" => "Mibit",
        ]);
        Unit::create([
            "code" => "D12",
            "name" => "Siemens metro cuadrado por Mol",
            "simbol" => "S·m²/mol",
        ]);
        Unit::create([
            "code" => "D13",
            "name" => "Sievert",
            "simbol" => "Sv",
        ]);
        Unit::create([
            "code" => "D14",
            "name" => "Yarda mil lineal",
        ]);
        Unit::create([
            "code" => "D15",
            "name" => "Sone",
            "description" => "Una uncodead de volumen del soncodeo subjetivo. Un sone es la intenscodead de un tono puro de la frecuencia y la fuerza de un kilohertz 40 decibelios.",
        ]);
        Unit::create([
            "code" => "D16",
            "name" => "Centimetro cuadrado por erg",
            "simbol" => "cm²/erg",
        ]);
        Unit::create([
            "code" => "D17",
            "name" => "Centimetro cuadrado por esteroradian erg",
            "simbol" => "cm²/(sr·erg)",
        ]);
        Unit::create([
            "code" => "D18",
            "name" => "Metro kelvin",
            "simbol" => "m·K",
        ]);
        Unit::create([
            "code" => "D19",
            "name" => "Metro cuadrado kelvin por watt.",
            "simbol" => "m²·K/W",
        ]);
        Unit::create([
            "code" => "D2",
            "name" => "Segundo recíproco por estereorradián metro cuadrado",
            "simbol" => "s⁻¹/(sr·m²)",
        ]);
        Unit::create([
            "code" => "D20",
            "name" => "Metro cuadrado por joule",
            "simbol" => "m²/J",
        ]);
        Unit::create([
            "code" => "D21",
            "name" => "Metro cuadrado por kilogramo",
            "simbol" => "m²/kg",
        ]);
        Unit::create([
            "code" => "D22",
            "name" => "Metro cuadrado por Mol",
            "simbol" => "m²/mol",
        ]);
        Unit::create([
            "code" => "D23",
            "name" => "Gramo pluma (proteína)",
            "description" => "Uncodead de recuento pata definir el número de gramos de aminoáccodeos  prescritos para la terapia parenteral y terapia enteral.",
        ]);
        Unit::create([
            "code" => "D24",
            "name" => "Metro cuadrado por esteroradian",
            "simbol" => "m²/sr",
        ]);
        Unit::create([
            "code" => "D25",
            "name" => "Metro cuadrado por esteroradian joule",
            "simbol" => "m²/(sr·J)",
        ]);
        Unit::create([
            "code" => "D26",
            "name" => "Metro cuadrado por voltiosegundo",
            "simbol" => "m²/(V·s)",
        ]);
        Unit::create([
            "code" => "D27",
            "name" => "Estereorradían",
            "description" => "Es la uncodead que mcodee angulos solcodeos",
            "simbol" => "sr",
        ]);
        Unit::create([
            "code" => "D28",
            "name" => "sifón",
        ]);
        Unit::create([
            "code" => "D29",
            "name" => "Terahertz",
            "description" => "Se refiere a las ondas electromagnéticas que se propagan en las frecuencias en el rango de los terahercios.",
            "simbol" => "THz",
        ]);
        Unit::create([
            "code" => "D30",
            "name" => "Terajoule",
            "simbol" => "TJ",
        ]);
        Unit::create([
            "code" => "D31",
            "name" => "Terawatt",
            "simbol" => "TW",
        ]);
        Unit::create([
            "code" => "D32",
            "name" => "Terawatt hora ",
            "simbol" => "TW·h",
        ]);
        Unit::create([
            "code" => "D33",
            "name" => "Tesla",
            "description" => "Es la inducción magnética uniforme que, repartcodea normalmente sobre una superficie de 1 metro cuadrado, produce a través de esta superficie un flujo magnético total de 1 weber. ",
            "simbol" => "T",
        ]);
        Unit::create([
            "code" => "D34",
            "name" => "Tex",
            "description" => "Encodead de medcodea utilizada para medir la denscodead o la masa lineal de una fibra.",
            "simbol" => "tex (g/km)",
        ]);
        Unit::create([
            "code" => "D35",
            "name" => "Calorías (termoquímicas)",
            "simbol" => "º cal",
        ]);
        Unit::create([
            "code" => "D36",
            "name" => "Megabit",
            "description" => "uncodead que se usa para cuantificar un caudal de datos equivalente a 1000 kb/s.",
            "simbol" => "Mbit",
        ]);
        Unit::create([
            "code" => "D37",
            "name" => "Calorías (termoquímicas) por gramo de kelvin",
            "simbol" => "º cal / (g · K)",
        ]);
        Unit::create([
            "code" => "D38",
            "name" => "Calorías (termoquímicas) por segundo centímetro kelvin",
            "simbol" => "º cal / (s · cm · K)",
        ]);
        Unit::create([
            "code" => "D39",
            "name" => "Calorías (termoquímicas) por segundo centímetro cuadrado kelvin",
            "simbol" => "º cal / (s · cm² · K)",
        ]);
        Unit::create([
            "code" => "D40",
            "name" => "Mil litros",
        ]);
        Unit::create([
            "code" => "D41",
            "name" => "Tonelada por metro cúbico",
            "simbol" => "t/m³",
        ]);
        Unit::create([
            "code" => "D42",
            "name" => "Año tropical",
            "description" => "Uncodead de tiempo equivalente a 365.242 19 días. Sinónimo: año solar.",
            "simbol" => "y (tropical)",
        ]);
        Unit::create([
            "code" => "D43",
            "name" => "Uncodead de masa atómica unificada",
            "simbol" => "u",
        ]);
        Unit::create([
            "code" => "D44",
            "name" => "Var",
            "description" => "El nombre de la uncodead es un acrónimo de volt-amperio-reactive.",
            "simbol" => "var",
        ]);
        Unit::create([
            "code" => "D45",
            "name" => "Voltio cuadrado por kelvin cuadrado",
            "simbol" => "V²/K²",
        ]);
        Unit::create([
            "code" => "D46",
            "name" => "Voltioio-amperio",
            "simbol" => "V·A",
        ]);
        Unit::create([
            "code" => "D47",
            "name" => "Voltio por centímetro",
            "simbol" => "V/cm",
        ]);
        Unit::create([
            "code" => "D48",
            "name" => "Voltio por Kelvin ",
            "simbol" => "V/K",
        ]);
        Unit::create([
            "code" => "D49",
            "name" => "Millivoltio por Kelvin ",
            "simbol" => "mV/K",
        ]);
        Unit::create([
            "code" => "D5",
            "name" => "Kilogramo por centímetro cuadrado",
            "simbol" => "kg/cm²",
        ]);
        Unit::create([
            "code" => "D50",
            "name" => "Voltio por metro",
            "description" => "Es la intenscodead de un campo eléctrico, que ejerce una fuerza de 1 newton sobre un cuerpo cargado con una cantcodead de electriccodead de 1 coulomb.",
            "simbol" => "V/m",
        ]);
        Unit::create([
            "code" => "D51",
            "name" => "Voltio por milímetro",
            "simbol" => "V/mm",
        ]);
        Unit::create([
            "code" => "D52",
            "name" => "Watt por kelvin",
            "simbol" => "W/K",
        ]);
        Unit::create([
            "code" => "D53",
            "name" => "Watt por metro kelvin",
            "description" => "Es la conductivcodead térmica de un cuerpo homogéneo isótropo, en la que una diferencia de temperatura de 1 kelvin entre dos planos paralelos, de área 1 metro cuadrado y distantes 1 metro, produce entre estos planos un flujo térmico de 1 watt.",
            "simbol" => "W/(m·K)",
        ]);
        Unit::create([
            "code" => "D54",
            "name" => "Watt por metro cuadrado",
            "simbol" => "W/m²",
        ]);
        Unit::create([
            "code" => "D55",
            "name" => "Watt por metro cuadrado kelvin",
            "simbol" => "W/(m²·K)",
        ]);
        Unit::create([
            "code" => "D56",
            "name" => "Watt por metro cuadrado kelvin a la cuarta potencia",
            "simbol" => "W/(m²·K⁴)",
        ]);
        Unit::create([
            "code" => "D57",
            "name" => "Watt por estereorradián",
            "simbol" => "W/sr",
        ]);
        Unit::create([
            "code" => "D58",
            "name" => "Watt por estereorradián metro cuadrado",
            "simbol" => "W/(sr·m²)",
        ]);
        Unit::create([
            "code" => "D59",
            "name" => "Weber por metro",
            "simbol" => "Wb/m",
        ]);
        Unit::create([
            "code" => "D6",
            "name" => "Roentgen por segundo",
            "simbol" => "R/s",
        ]);
        Unit::create([
            "code" => "D60",
            "name" => "Weber por milímetro",
            "simbol" => "Wb/mm",
        ]);
        Unit::create([
            "code" => "D61",
            "name" => "Minuto Unit::create([uncodead de ángulo]",
            "description" => "Es una sexagesima parte de un grado.",
            "simbol" => "'",
        ]);
        Unit::create([
            "code" => "D62",
            "name" => "Segundo Unit::create([uncodead de ángulo]",
            "description" => "Es una uncodead de medcodea angular. Su valor equivale a 1/60 del minuto de arco y a 1/3600 del grado sexagesimal.",
            "simbol" => "\"",
        ]);
        Unit::create([
            "code" => "D63",
            "name" => "Libro",
            "description" => "Uncodead de recuento para definir el número de libros (libro: conjunto de elementos uncodeos entre sí o documento de un material escrito).",
        ]);
        Unit::create([
            "code" => "D64",
            "name" => "bloquear",
        ]);
        Unit::create([
            "code" => "D65",
            "name" => "Redondo",
            "description" => "Uncodead de recuento para definir el número de rondas (redondos: un objeto circular o cilíndrico).",
        ]);
        Unit::create([
            "code" => "D66",
            "name" => "casete",
        ]);
        Unit::create([
            "code" => "D67",
            "name" => "Dólar por hora",
        ]);
        Unit::create([
            "code" => "D68",
            "name" => "Número de palabras",
            "description" => "Uncodead de recuento para definir el número de palabras.",
        ]);
        Unit::create([
            "code" => "D69",
            "name" => "Pulgada a la cuarta potencia",
            "simbol" => "in⁴",
        ]);
        Unit::create([
            "code" => "D7",
            "name" => "Sandwich",
        ]);
        Unit::create([
            "code" => "D70",
            "name" => "Calorías (tabla internacional)",
            "simbol" => "Cal TI",
        ]);
        Unit::create([
            "code" => "D71",
            "name" => "Calorías (tabla internacional) por segundo centímetro kelvin",
            "simbol" => "cal TI / (s · cm · K)",
        ]);
        Unit::create([
            "code" => "D72",
            "name" => "Calorías (tabla internacional) por segundo centímetro cuadrado kelvin",
            "simbol" => "Cal TI / (s · cm² · K)",
        ]);
        Unit::create([
            "code" => "D73",
            "name" => "Joule metro cuadrado",
            "simbol" => "J·m²",
        ]);
        Unit::create([
            "code" => "D74",
            "name" => "Kilogramo por Mol",
            "simbol" => "kg/mol",
        ]);
        Unit::create([
            "code" => "D75",
            "name" => "Calorías (tabla internacional) por gramo",
            "simbol" => "cal IT / g",
        ]);
        Unit::create([
            "code" => "D76",
            "name" => "Calorías (tabla internacional) por gramo de kelvin",
            "simbol" => "cal IT / (g · K)",
        ]);
        Unit::create([
            "code" => "D77",
            "name" => "MegaCulombio",
            "simbol" => "MC",
        ]);
        Unit::create([
            "code" => "D78",
            "name" => "Megajoule por segundo",
            "description" => "Uncodead de energía acumulada igual a un millón de julios por segundo.",
            "simbol" => "MJ/s",
        ]);
        Unit::create([
            "code" => "D79",
            "name" => "Viga",
        ]);
        Unit::create([
            "code" => "D8",
            "name" => "Draize score",
        ]);
        Unit::create([
            "code" => "D80",
            "name" => "Microwatt",
            "simbol" => "µW",
        ]);
        Unit::create([
            "code" => "D81",
            "name" => "Microtesla",
            "simbol" => "µT",
        ]);
        Unit::create([
            "code" => "D82",
            "name" => "Microvoltio",
            "simbol" => "µV",
        ]);
        Unit::create([
            "code" => "D83",
            "name" => "Milinewton metro",
            "simbol" => "mN·m",
        ]);
        Unit::create([
            "code" => "D85",
            "name" => "Microwatt por metro cuadrado",
            "description" => "Es equivalente a una millonésima parte de un vatio.",
            "simbol" => "µW/m²",
        ]);
        Unit::create([
            "code" => "D86",
            "name" => "MiliCulombio",
            "simbol" => "mC",
        ]);
        Unit::create([
            "code" => "D87",
            "name" => "MiliMol por kilogramo",
            "simbol" => "mmol/kg",
        ]);
        Unit::create([
            "code" => "D88",
            "name" => "MiliCulombio por metro cúbico",
            "simbol" => "mC/m³",
        ]);
        Unit::create([
            "code" => "D89",
            "name" => "MiliCulombio por metro cuadrado",
            "simbol" => "mC/m²",
        ]);
        Unit::create([
            "code" => "D9",
            "name" => "Dina por centímetro cuadrado",
            "simbol" => "Dyn / cm²",
        ]);
        Unit::create([
            "code" => "D90",
            "name" => "Metro cúbico (neta)",
        ]);
        Unit::create([
            "code" => "D91",
            "name" => "Rem",
            "simbol" => "rem",
        ]);
        Unit::create([
            "code" => "D92",
            "name" => "banda",
        ]);
        Unit::create([
            "code" => "D93",
            "name" => "Segundo por metro cúbico",
            "simbol" => "s/m³",
        ]);
        Unit::create([
            "code" => "D94",
            "name" => "Segundo por metro cúbico Radian",
            "simbol" => "s/(rad·m³)",
        ]);
        Unit::create([
            "code" => "D95",
            "name" => "Joule por gramo",
            "simbol" => "J/g",
        ]);
        Unit::create([
            "code" => "D96",
            "name" => "Libra bruta",
        ]);
        Unit::create([
            "code" => "D98",
            "name" => "Libra masiva",
        ]);
        Unit::create([
            "code" => "D99",
            "name" => "manga",
        ]);
        Unit::create([
            "code" => "DAA",
            "name" => "Decar",
            "simbol" => "daa",
        ]);
        Unit::create([
            "code" => "DAD",
            "name" => "Decena de días",
            "description" => "Uncodead de tiempo que define el número de días en múltiplos de 10.",
        ]);
        Unit::create([
            "code" => "DAY",
            "name" => "Día",
            "description" => "Se denomina día (del latín dies) al lapso que tarda la Tierra desde que el Sol está en el punto más alto sobre el horizonte hasta que vuelve a estarlo.",
            "simbol" => "d",
        ]);
        Unit::create([
            "code" => "DB",
            "name" => "Libra seca",
            "description" => "Uncodead de masa que define el número de libras de un producto, sin tener en cuenta el contencodeo de agua del producto.",
        ]);
        Unit::create([
            "code" => "DC",
            "name" => "Disco (disco)",
        ]);
        Unit::create([
            "code" => "DD",
            "name" => "Grado Unit::create([uncodead de ángulo]",
            "description" => "Es el resultado de divcodeir el ángulo llano en 180 partes iguales.",
            "simbol" => "°",
        ]);
        Unit::create([
            "code" => "DE",
            "name" => "Acuerdo",
        ]);
        Unit::create([
            "code" => "DEC",
            "name" => "Década",
            "description" => "Uncodead de recuento de definir el número de décadas (década: cantcodead igual a 10 o tiempo igual a 10 años).",
        ]);
        Unit::create([
            "code" => "DG",
            "name" => "Decigramo",
            "simbol" => "dg",
        ]);
        Unit::create([
            "code" => "DI",
            "name" => "dispensador",
        ]);
        Unit::create([
            "code" => "DJ",
            "name" => "Decagramo",
            "simbol" => "dag",
        ]);
        Unit::create([
            "code" => "DLT",
            "name" => "Decilitro",
            "simbol" => "dl",
        ]);
        Unit::create([
            "code" => "DMA",
            "name" => "Decámetro cúbico",
            "simbol" => "dam³",
        ]);
        Unit::create([
            "code" => "DMK",
            "name" => "Decímetro cuadrado ",
            "description" => "Medcodea de longitud, de símbolo dm, que es igual a la décima parte de un metro.",
            "simbol" => "dm²",
        ]);
        Unit::create([
            "code" => "DMO",
            "name" => "Kiloliter norma",
            "description" => "Uncodead de volumen que define el número de kilolitros de un producto a una temperatura de 15 grados centígrados, sobre todo en relación con los aceites de hcoderocarburos.",
        ]);
        Unit::create([
            "code" => "DMQ",
            "name" => "Decímetro cúbico",
            "description" => "Medcodea de longitud, de símbolo dm, que es igual a la décima parte de un metro.",
            "simbol" => "dm³",
        ]);
        Unit::create([
            "code" => "DMT",
            "name" => "Decímetro",
            "description" => "Es una uncodead de longitud. Es el primer submúltiplo del metro y equivale a la décima parte de él.",
            "simbol" => "dm",
        ]);
        Unit::create([
            "code" => "DN",
            "name" => "Decinewton metro",
            "simbol" => "dN·m",
        ]);
        Unit::create([
            "code" => "DPC",
            "name" => "Docenas de piezas",
            "description" => "Uncodead de recuento para definir el número de piezas en múltiplos de 12 (pieza: un solo artículo, el artículo o ejemplar).",
        ]);
        Unit::create([
            "code" => "DPR",
            "name" => "Docenas de pares",
            "description" => "Uncodead de recuento de definir el número de pares en múltiplos de 12 (par: ítem descrito por dos de).",
        ]);
        Unit::create([
            "code" => "DPT",
            "name" => "Peso de desplazamiento",
            "description" => "Uncodead de masa que define el volumen de agua de mar de un barco desplaza, expresada como el número de toneladas.",
        ]);
        Unit::create([
            "code" => "DQ",
            "name" => "registro de datos",
        ]);
        Unit::create([
            "code" => "DRA",
            "name" => "Dram (EUA)",
            "description" => "Sinónimo: dracma (Reino Uncodeo), dram Troy",
        ]);
        Unit::create([
            "code" => "DRI",
            "name" => "Dram (UK)",
            "description" => "Son las siglas de la voz inglesa Dynamic Random Access Memory, que significa memoria dinámica de acceso aleatorio (o RAM dinámica), para denominar a un tipo de tecnología de memoria RAM basada en condensadores, los cuales pierden su carga progresivamente, necesitando de un circuito dinámico de refresco que, cada cierto período, revisa dicha carga y la repone en un ciclo de refresco.",
        ]);
        Unit::create([
            "code" => "DRL",
            "name" => "Docena de rodillos",
            "description" => "Uncodead de recuento de definir el número de rollos, expresado en doce uncodeades de rodillos.",
        ]);
        Unit::create([
            "code" => "DRM",
            "name" => "Drachm (UK)",
        ]);
        Unit::create([
            "code" => "DS",
            "name" => "monitor",
        ]);
        Unit::create([
            "code" => "DT",
            "name" => "Tonelada seca",
            "description" => "Uncodead de masa que define el número de toneladas de un producto, sin tener en cuenta el contencodeo de agua del producto.",
        ]);
        Unit::create([
            "code" => "DTN",
            "name" => "Decitonelada métrica",
            "description" => "Sinónimo: centner, métrico 100 kg; Quintal, métrico 100 kg",
            "simbol" => "dt or dtn",
        ]);
        Unit::create([
            "code" => "DU",
            "name" => "dina",
            "simbol" => "Dyn",
        ]);
        Unit::create([
            "code" => "DWT",
            "name" => "Pennyweight",
            "description" => "La uncodead obsoleta pennyweight era Uncodead de masa utilizada en el Reino Uncodeo antes de 1971. Se conscodeeraba equivalente a la masa de un penique, y equivale a la 1/240 parte de una libra troy. Se abrevia pwt.",
        ]);
        Unit::create([
            "code" => "Dx",
            "name" => "Dina por centímetro",
            "simbol" => "Dyn / cm",
        ]);
        Unit::create([
            "code" => "DY",
            "name" => "Libro de directorio",
        ]);
        Unit::create([
            "code" => "DZN",
            "name" => "Docena",
            "description" => "Uncodead de recuento de definir el número de uncodeades en múltiplos de 12.",
            "simbol" => "DOZ",
        ]);
        Unit::create([
            "code" => "DZP",
            "name" => "Docena de paquete",
            "description" => "Uncodead de conteo que define el número de paquetes en múltiplos de 12 (paquete: uncodead de embalaje estándar).",
        ]);
        Unit::create([
            "code" => "E01",
            "name" => "Newton por centímetro cuadrado",
            "description" => "Medcodea de la presión expresada en newtons por centímetro cuadrado",
            "simbol" => "N/cm²",
        ]);
        Unit::create([
            "code" => "E07",
            "name" => "Megawatt hora por hora",
            "description" => "Uncodead de energía acumulado de un millón de vatios durante un período de una hora.",
            "simbol" => "MW·h/h",
        ]);
        Unit::create([
            "code" => "E08",
            "name" => "Megavatios por hertz",
            "description" => "Uncodead de energía expresada como el cambio de carga en millones de watts que provocará un desplazamiento de frecuencia de un hertz.",
            "simbol" => "MW/Hz",
        ]);
        Unit::create([
            "code" => "E09",
            "name" => "Miliamperio hora",
            "description" => "Uncodead de carga de potencia entregada a razón de una milésima parte de un amperio durante un período de una hora.",
            "simbol" => "mA·h",
        ]);
        Unit::create([
            "code" => "E10",
            "name" => "Día de grado",
            "description" => "Uncodead de medcodea utilizada en la meteorología y la ingeniería para medir la demanda de calentamiento o enfriamiento durante un período determinado de días.",
            "simbol" => "deg da",
        ]);
        Unit::create([
            "code" => "E11",
            "name" => "Gigacalorie",
            "description" => "Una uncodead de energía térmica equivalente a mil millones de calorías.",
        ]);
        Unit::create([
            "code" => "E12",
            "name" => "Mille",
            "description" => "Uncodead de recuento de definir el número de cigarrillos en uncodeades de 1.000.",
        ]);
        Unit::create([
            "code" => "E14",
            "name" => "Kilocaloría (tabla internacional)",
            "simbol" => "kcalIT",
        ]);
        Unit::create([
            "code" => "E15",
            "name" => "Kilocaloría (termoquímica) por hora",
            "simbol" => "kcalth/h",
        ]);
        Unit::create([
            "code" => "E16",
            "name" => "Millón de btu (ti) por hora",
            "description" => "Uncodead de potencia igual a un millón de uncodeades térmicas británicas por hora.",
            "simbol" => "BtuIT/h",
        ]);
        Unit::create([
            "code" => "E17",
            "name" => "Pie cúbico por segundo",
            "description" => "Uncodead de volumen igual a un pie cúbico pasa por un punto dado en un periodo de un segundo.",
            "simbol" => "ft³/s",
        ]);
        Unit::create([
            "code" => "E18",
            "name" => "Tonelada por hora",
            "description" => "Una uncodead de peso o masa equivalente a una tonelada métrica por hora.",
            "simbol" => "t/h",
        ]);
        Unit::create([
            "code" => "E19",
            "name" => "Ping",
            "description" => "Uncodead de área equivalente a 3,3 metros cuadrados.",
        ]);
        Unit::create([
            "code" => "E20",
            "name" => "Megabit por segundo",
            "description" => "Uncodead de información igual a 10 ⁶  (1000000) bits (dígitos binarios) por segundo.",
            "simbol" => "Mbit/s",
        ]);
        Unit::create([
            "code" => "E21",
            "name" => "Shares",
            "description" => "Uncodead de recuento para definir el número de acciones (proporción: un total o una parte de las partes en que se divcodee el capital de una entcodead comercial).",
        ]);
        Unit::create([
            "code" => "E22",
            "name" => "Tue",
            "description" => "Uncodead de recuento para definir el número de uncodeades equivalentes a veinte pies (TEU) como una medcodea de la capaccodead de carga en contenedores.",
        ]);
        Unit::create([
            "code" => "E23",
            "name" => "Neumático",
            "description" => "Uncodead de recuento de definir el número de neumáticos (una cubierta sólcodea o llena de aire colocado alrededor de una llanta de rueda para formar un contacto suave con la carretera, absorber los golpes y proporcionar tracción).",
        ]);
        Unit::create([
            "code" => "E25",
            "name" => "Uncodead activa",
            "description" => "Uncodead de conteo que define el número de uncodeades activas dentro de una sustancia.",
        ]);
        Unit::create([
            "code" => "E27",
            "name" => "Dosis",
            "description" => "Uncodead de recuento de definir el número de dosis (dosis: una cantcodead defincodea de un medicamento o fármaco).",
        ]);
        Unit::create([
            "code" => "E28",
            "name" => "Tonelada seca de aire",
            "description" => "Uncodead de masa que define el número de toneladas de un producto, sin tener en cuenta el contencodeo de agua del producto.",
        ]);
        Unit::create([
            "code" => "E3",
            "name" => "remolque",
        ]);
        Unit::create([
            "code" => "E30",
            "name" => "Hebra",
            "description" => "Uncodead de recuento de definir el número de hebras (hebra: de largo,, flexible, solo hilo delgado, tiras de fibra, filamento constituyente o múltiplos de la misma, trenzados entre sí).",
        ]);
        Unit::create([
            "code" => "E31",
            "name" => "Metro cuadrado por litro",
            "description" => "Uncodead de recuento de definir el número de metros cuadrados por litro.",
            "simbol" => "m²/l",
        ]);
        Unit::create([
            "code" => "E32",
            "name" => "Litros por hora",
            "description" => "Uncodead de recuento de definir el número de litros por hora.",
            "simbol" => "l/h",
        ]);
        Unit::create([
            "code" => "E33",
            "name" => "Por mil pies",
            "description" => "Uncodead de recuento de definir el número de pies por mil uncodeades.",
        ]);
        Unit::create([
            "code" => "E34",
            "name" => "Gigabyte",
            "description" => "Uncodead de información igual a 10⁹ bytes.",
            "simbol" => "Gbyte",
        ]);
        Unit::create([
            "code" => "E35",
            "name" => "Terabyte",
            "description" => "Uncodead de información igual a 10¹² bytes.",
            "simbol" => "Tbyte",
        ]);
        Unit::create([
            "code" => "E36",
            "name" => "Petabyte",
            "description" => "Uncodead de información igual a 10¹⁵ bytes.",
            "simbol" => "Pbyte",
        ]);
        Unit::create([
            "code" => "E37",
            "name" => "Pixel",
            "description" => "Uncodead de recuento de definir el número de píxeles (píxel: elemento de imagen).",
        ]);
        Unit::create([
            "code" => "E38",
            "name" => "Megapíxeles",
            "description" => "Uncodead de recuento igual a 10 $ ⁶ $ (1000000) píxeles (elementos de imagen).",
        ]);
        Unit::create([
            "code" => "E39",
            "name" => "Puntos por pulgada",
            "description" => "Uncodead de información que define el número de puntos por pulgada lineal como una medcodea de la resolución o nitcodeez de una imagen gráfica.",
            "simbol" => "dpi",
        ]);
        Unit::create([
            "code" => "E4",
            "name" => "Kilo bruto",
            "description" => "Uncodead de masa que define el número total de kilogramos antes de las deducciones.",
        ]);
        Unit::create([
            "code" => "E40",
            "name" => "Parte por cien mil",
            "description" => "Uncodead de proporción igual a 10⁻⁵.",
            "simbol" => "ppht",
        ]);
        Unit::create([
            "code" => "E41",
            "name" => "Kilogramo-fuerza por milímetro cuadrado",
            "simbol" => "kgf·m/cm²",
        ]);
        Unit::create([
            "code" => "E42",
            "name" => "Kilogramo-fuerza por centímetro cuadrado",
            "simbol" => "kgf/cm²",
        ]);
        Unit::create([
            "code" => "E43",
            "name" => "Joule por centímetro cuadrado",
            "description" => "Una uncodead de energía que define el número de julios por centímetro cuadrado.",
            "simbol" => "J/cm²",
        ]);
        Unit::create([
            "code" => "E44",
            "name" => "Metros kilogramo-fuerza por centímetro cuadrado",
            "description" => "Uncodead de torsión que define el medcodeor de par kilogramo-fuerza por centímetro cuadrado.",
            "simbol" => "kgf·m/cm²",
        ]);
        Unit::create([
            "code" => "E45",
            "name" => "MiliOhm",
            "simbol" => "mΩ",
        ]);
        Unit::create([
            "code" => "E46",
            "name" => "Kilovatio hora por metro cúbico",
            "description" => "Uncodead de consumo de energía expresada como kilovatio hora por metro cúbico.",
            "simbol" => "kW·h/m³",
        ]);
        Unit::create([
            "code" => "E47",
            "name" => "Kilovatio hora por kelvin",
            "description" => "Uncodead de consumo de energía expresada como kilovatio hora por kelvin.",
            "simbol" => "kW·h/K",
        ]);
        Unit::create([
            "code" => "E48",
            "name" => "Uncodead de servicio",
            "description" => "Uncodead de conteo que define el número de uncodeades de servicio (uncodead de servicio: defincodeo período / propiedad / centro / utilcodead de alimentación).",
        ]);
        Unit::create([
            "code" => "E49",
            "name" => "Día de trabajo",
            "description" => "Uncodead de recuento de definir el número de días de trabajo (jornada de trabajo: un día en el que se lleva a cabo normalmente un trabajo).",
        ]);
        Unit::create([
            "code" => "E5",
            "name" => "Tonelada métrica larga",
            "description" => "Utilice ton (UK) o tonelada larga (US) (código común LTN)",
        ]);
        Unit::create([
            "code" => "E50",
            "name" => "Uncodead de cuenta",
            "description" => "Uncodead de recuento de definir el número de uncodeades de contabilcodead.",
        ]);
        Unit::create([
            "code" => "E51",
            "name" => "Trabajo",
            "description" => "Uncodead de recuento de definir el número de puestos de trabajo.",
        ]);
        Unit::create([
            "code" => "E52",
            "name" => "Run foot",
            "description" => "Uncodead de conteo para definir la distancia (en la uncodead Pie) que se dan en una carrera).",
        ]);
        Unit::create([
            "code" => "E53",
            "name" => "Prueba",
            "description" => "Uncodead de recuento de definir el número de pruebas.",
        ]);
        Unit::create([
            "code" => "E54",
            "name" => "Viaje",
            "description" => "Uncodead de recuento de definir el número de viajes.",
        ]);
        Unit::create([
            "code" => "E55",
            "name" => "Utilizar",
            "description" => "Uncodead de recuento de definir el número de veces que se utiliza un objeto.",
        ]);
        Unit::create([
            "code" => "E56",
            "name" => "Bien",
            "description" => "Uncodead de recuento para definir el número de pozos.",
        ]);
        Unit::create([
            "code" => "E57",
            "name" => "Zona",
            "description" => "Uncodead de conteo que define el número de zonas.",
        ]);
        Unit::create([
            "code" => "E58",
            "name" => "Exabit por segundo",
            "description" => "Uncodead de información igual a 10¹⁸ bits (dígitos binarios) por segundo.",
            "simbol" => "Ebit/s",
        ]);
        Unit::create([
            "code" => "E59",
            "name" => "Exbibyte",
            "description" => "Uncodead de información igual a 2⁶⁰ bytes.",
            "simbol" => "Eibyte",
        ]);
        Unit::create([
            "code" => "E60",
            "name" => "Pebibyte",
            "description" => "Uncodead de información igual a 2⁵⁰ bytes.",
            "simbol" => "Pibyte",
        ]);
        Unit::create([
            "code" => "E61",
            "name" => "Tebibyte",
            "description" => "Uncodead de información igual a 2⁴⁰ bytes.",
            "simbol" => "Tibyte",
        ]);
        Unit::create([
            "code" => "E62",
            "name" => "Gibibyte",
            "description" => "Uncodead de información igual a 2³⁰ bytes.",
            "simbol" => "Gibyte",
        ]);
        Unit::create([
            "code" => "E63",
            "name" => "Mebibyte",
            "description" => "Uncodead de información igual a 2²⁰ bytes.",
            "simbol" => "Mibyte",
        ]);
        Unit::create([
            "code" => "E64",
            "name" => "Kibibyte",
            "description" => "Uncodead de información igual a 2¹⁰ bytes.",
            "simbol" => "Kibyte",
        ]);
        Unit::create([
            "code" => "E65",
            "name" => "Exbibit por metro",
            "description" => "Uncodead de información igual a 2⁶⁰ bits (dígitos binarios) por metro.",
            "simbol" => "Eibit/m",
        ]);
        Unit::create([
            "code" => "E66",
            "name" => "Exbibit por metro cuadrado",
            "description" => "Uncodead de información igual a 2⁶⁰ bits (dígitos binarios) por metro cuadrado.",
            "simbol" => "Eibit/m²",
        ]);
        Unit::create([
            "code" => "E67",
            "name" => "Exbibit por metro cúbico",
            "description" => "Uncodead de información igual a 2⁶⁰ bits (dígitos binarios) por metro cúbico.",
            "simbol" => "Eibit/m³",
        ]);
        Unit::create([
            "code" => "E68",
            "name" => "Gigabyte por segundo",
            "description" => "Uncodead de información igual a 10⁹ bytes por segundo.",
            "simbol" => "Gbyte/s",
        ]);
        Unit::create([
            "code" => "E69",
            "name" => "Gibibit por metro",
            "description" => "Uncodead de información igual a 2³⁰ bits (dígitos binarios) por metro.",
            "simbol" => "Gibit/m",
        ]);
        Unit::create([
            "code" => "E70",
            "name" => "Gibibit por metro cuadrado",
            "description" => "Uncodead de información igual a 2³⁰ bits (dígitos binarios) por metro cuadrado.",
            "simbol" => "Gibit/m²",
        ]);
        Unit::create([
            "code" => "E71",
            "name" => "Gibibit por metro cúbico",
            "description" => "Uncodead de información igual a 2³⁰ bits (dígitos binarios) por metro cúbico.",
            "simbol" => "Gibit/m³",
        ]);
        Unit::create([
            "code" => "E72",
            "name" => "Kibibit por metro",
            "description" => "Uncodead de información igual a 2¹⁰ bits (dígitos binarios) por metro.",
            "simbol" => "Kibit/m",
        ]);
        Unit::create([
            "code" => "E73",
            "name" => "Kibibit por metro cuadrado",
            "description" => "Uncodead de información igual a 2¹⁰ bits (dígitos binarios) por metro cuadrado.",
            "simbol" => "Kibit/m²",
        ]);
        Unit::create([
            "code" => "E74",
            "name" => "Kikibit por metro cúbico.",
            "description" => " Uncodead de información igual a 2¹⁰ bits (dígitos binarios) por metro cúbico.",
            "simbol" => "Kibit/m³",
        ]);
        Unit::create([
            "code" => "E75",
            "name" => "Mebbit por metro.",
            "description" => " Uncodead de información igual a 2²⁰ bits (dígitos binarios) por metro.",
            "simbol" => "Mibit/m",
        ]);
        Unit::create([
            "code" => "E76",
            "name" => "Mebbitt por metro cuadrado.",
            "description" => " Uncodead de información igual a 2²⁰ bits (dígitos binarios) por metro cuadrado.",
            "simbol" => "Mibit/m²",
        ]);
        Unit::create([
            "code" => "E77",
            "name" => "Mebbit por metro cúbico. ",
            "description" => " Uncodead de información igual a 2²⁰ bits (dígitos binarios) por metro cúbico.",
            "simbol" => "Mibit/m³",
        ]);
        Unit::create([
            "code" => "E78",
            "name" => "Petabit",
            "description" => " Uncodead de información igual a 10¹⁵ los bits (dígitos binarios).",
            "simbol" => "Pbit",
        ]);
        Unit::create([
            "code" => "E79",
            "name" => "Pebibit por segundo.",
            "description" => " Uncodead de información igual a 10¹⁵ bits (dígitos binarios) por segundo.",
            "simbol" => "Pbit/s",
        ]);
        Unit::create([
            "code" => "E80",
            "name" => "Pebibit por metro.",
            "description" => "Uncodead de información igual a 2⁵⁰ bits (dígitos binarios) por metro.",
            "simbol" => "Pibit/m",
        ]);
        Unit::create([
            "code" => "E81",
            "name" => "Pebibit por metro cuadrado.",
            "description" => " Uncodead de información igual a 2⁵⁰ bits (dígitos binarios) por metro cuadrado.",
            "simbol" => "Pibit/m²",
        ]);
        Unit::create([
            "code" => "E82",
            "name" => "Pebibit por metro cúbico.",
            "description" => " Uncodead de información igual a 2⁵⁰ bits (dígitos binarios) por metro cúbico.",
            "simbol" => "Pibit/m³",
        ]);
        Unit::create([
            "code" => "E83",
            "name" => "Tebibit.",
            "description" => " Uncodead de información igual a 10¹² los bits (dígitos binarios).",
            "simbol" => "Tbit",
        ]);
        Unit::create([
            "code" => "E84",
            "name" => "Tebibit por segundo",
            "description" => " Uncodead de información igual a 10¹² bits (dígitos binarios) por segundo.",
            "simbol" => "Tbit/s",
        ]);
        Unit::create([
            "code" => "E85",
            "name" => "Tebibit por metro.",
            "description" => " Uncodead de información igual a 2⁴⁰ bits (dígitos binarios) por metro.",
            "simbol" => "Tibit/m",
        ]);
        Unit::create([
            "code" => "E86",
            "name" => "Tebibit por metro cúbico.",
            "description" => " Uncodead de información igual a 2⁴⁰ bits (dígitos binarios) por metro cúbico.",
            "simbol" => "Tibit/m³",
        ]);
        Unit::create([
            "code" => "E87",
            "name" => "Tebibit por metro cuadrado",
            "description" => " Uncodead de información igual a 2⁴⁰ bits (dígitos binarios) por metro cuadrado.",
            "simbol" => "Tibit/m²",
        ]);
        Unit::create([
            "code" => "E88",
            "name" => "Bit por metro",
            "description" => "Uncodead de información igual a 1 bit (dígito binario) por metro.",
            "simbol" => "bit/m",
        ]);
        Unit::create([
            "code" => "E89",
            "name" => "Bit por metro cuadrado",
            "description" => " Uncodead de información igual a 1 bit (dígito binario) por metro cuadrado.",
            "simbol" => "bit/m²",
        ]);
        Unit::create([
            "code" => "E90",
            "name" => "Centímetro recíproco",
            "simbol" => "cm⁻¹",
        ]);
        Unit::create([
            "code" => "E91",
            "name" => "Día recíproco",
            "simbol" => "d⁻¹",
        ]);
        Unit::create([
            "code" => "E92",
            "name" => "Decímetro cúbico por hora",
            "simbol" => "dm³/h",
        ]);
        Unit::create([
            "code" => "E93",
            "name" => "Kilogramo por hora",
            "simbol" => "kg/h",
        ]);
        Unit::create([
            "code" => "E94",
            "name" => "KiloMol por segundo",
            "simbol" => "kmol/s",
        ]);
        Unit::create([
            "code" => "E95",
            "name" => "Mol por segundo",
            "simbol" => "mol/s",
        ]);
        Unit::create([
            "code" => "E96",
            "name" => "Grado por segundo",
            "simbol" => "°/s",
        ]);
        Unit::create([
            "code" => "E97",
            "name" => "Mililitro por gadro celsius metro",
            "simbol" => "mm/(°C·m)",
        ]);
        Unit::create([
            "code" => "E98",
            "name" => "Grado celsius por kelvin",
            "simbol" => "°C/K",
        ]);
        Unit::create([
            "code" => "E99",
            "name" => "Hectopascal por bar",
            "simbol" => "hPa/bar",
        ]);
        Unit::create([
            "code" => "EA",
            "name" => "Elemento",
            "description" => "Uncodead de conteo que define el número de elementos conscodeerados como uncodeades separadas.",
        ]);
        Unit::create([
            "code" => "EB",
            "name" => "Casilla de correo electrónico",
            "description" => "Es el destino al que correo electrónico se entregan los mensajes. Es el equivalente de un buzón en el sistema postal.",
        ]);
        Unit::create([
            "code" => "EP",
            "name" => "Paquete de once",
        ]);
        Unit::create([
            "code" => "EQ",
            "name" => "Galón equivalente",
            "description" => "Uncodead de volumen que define el número de galones de producto produccodeo a partir de concentrado.",
        ]);
        Unit::create([
            "code" => "F01",
            "name" => "Bit por metro cúbico",
            "description" => "Uncodead de información igual a 1 bit (dígito binario) por metro cúbico.",
            "simbol" => "bit/m³",
        ]);
        Unit::create([
            "code" => "F02",
            "name" => "Kelvin por kelvin",
            "simbol" => "K/K",
        ]);
        Unit::create([
            "code" => "F03",
            "name" => "Kilopascal por bar",
            "simbol" => "kPa/bar",
        ]);
        Unit::create([
            "code" => "F04",
            "name" => "Milibar por bar",
            "simbol" => "mbar/bar",
        ]);
        Unit::create([
            "code" => "F05",
            "name" => "Megapascal por bar",
            "simbol" => "MPa/bar",
        ]);
        Unit::create([
            "code" => "F06",
            "name" => "Poise por bar",
            "simbol" => "P/bar",
        ]);
        Unit::create([
            "code" => "F07",
            "name" => "Pascal por bar",
            "simbol" => "Pa/bar",
        ]);
        Unit::create([
            "code" => "F08",
            "name" => "Miliamperio por pulgada",
            "simbol" => "mA/in",
        ]);
        Unit::create([
            "code" => "F1",
            "name" => "Mil pies cúbicos por día",
        ]);
        Unit::create([
            "code" => "F10",
            "name" => "Kelvin por hora",
            "simbol" => "K/h",
        ]);
        Unit::create([
            "code" => "F11",
            "name" => "Kelvin por minuto",
            "simbol" => "K/min",
        ]);
        Unit::create([
            "code" => "F12",
            "name" => "Kelvin por segundo",
            "simbol" => "K/s",
        ]);
        Unit::create([
            "code" => "F13",
            "name" => "Slug",
            "description" => "Una uncodead de masa. Un slug es la masa acelerada a 1 pie por segundo por segundo por una fuerza de 1 libra.",
            "simbol" => "slug",
        ]);
        Unit::create([
            "code" => "F14",
            "name" => "Gramo por kelvin",
            "simbol" => "g/K",
        ]);
        Unit::create([
            "code" => "F15",
            "name" => "Kilogramo por kelvin",
            "simbol" => "kg/K",
        ]);
        Unit::create([
            "code" => "F16",
            "name" => "Miligramo por kelvin",
            "simbol" => "mg/K",
        ]);
        Unit::create([
            "code" => "F17",
            "name" => "Libra fuerza por pie",
            "simbol" => "lbf/ft",
        ]);
        Unit::create([
            "code" => "F18",
            "name" => "Kilogramo centímetro cuadrado",
            "simbol" => "kg·cm²",
        ]);
        Unit::create([
            "code" => "F19",
            "name" => "Kilogramo milimetro cuadrado",
            "simbol" => "kg·mm²",
        ]);
        Unit::create([
            "code" => "F20",
            "name" => "Libra pulgada cuadrada",
            "simbol" => "lb·in²",
        ]);
        Unit::create([
            "code" => "F21",
            "name" => "Libra fuerza pulgada",
            "simbol" => "lbf·in",
        ]);
        Unit::create([
            "code" => "F22",
            "name" => "Libra fuerza por pie entre amperio",
            "simbol" => "lbf·ft/A",
        ]);
        Unit::create([
            "code" => "F23",
            "name" => "Gramo por decímetro cúbico",
            "simbol" => "g/dm³",
        ]);
        Unit::create([
            "code" => "F24",
            "name" => "Kilogramo por kiloMol",
            "simbol" => "kg/kmol",
        ]);
        Unit::create([
            "code" => "F25",
            "name" => "Gramo por hertz",
            "simbol" => "g/Hz",
        ]);
        Unit::create([
            "code" => "F26",
            "name" => "Gramo por día",
            "simbol" => "g/d",
        ]);
        Unit::create([
            "code" => "F27",
            "name" => "Gramo por hora",
            "simbol" => "g/h",
        ]);
        Unit::create([
            "code" => "F28",
            "name" => "Gramo por minuto",
            "simbol" => "g/min",
        ]);
        Unit::create([
            "code" => "F29",
            "name" => "Gramo por segundo",
            "simbol" => "g/s",
        ]);
        Unit::create([
            "code" => "F30",
            "name" => "Kilogramo por día",
            "simbol" => "kg/d",
        ]);
        Unit::create([
            "code" => "F31",
            "name" => "Kilogramo por minuto",
            "simbol" => "kg/min",
        ]);
        Unit::create([
            "code" => "F32",
            "name" => "Miligramo por dia",
            "simbol" => "mg/d",
        ]);
        Unit::create([
            "code" => "F33",
            "name" => "Miligramo por minuto",
            "simbol" => "mg/min",
        ]);
        Unit::create([
            "code" => "F34",
            "name" => "Miligramo por segundo",
            "simbol" => "mg/s",
        ]);
        Unit::create([
            "code" => "F35",
            "name" => "Gramo por día kelvin",
            "simbol" => "g/(d·K)",
        ]);
        Unit::create([
            "code" => "F36",
            "name" => "Gramo por hora kelvin",
            "simbol" => "g/(h·K)",
        ]);
        Unit::create([
            "code" => "F37",
            "name" => "Gramo por minuto kelvin",
            "simbol" => "g/(min·K)",
        ]);
        Unit::create([
            "code" => "F38",
            "name" => "Gramo por segundo kelvin",
            "simbol" => "g/(s·K)",
        ]);
        Unit::create([
            "code" => "F39",
            "name" => "Kilogramo por día kelvin",
            "simbol" => "kg/(d·K)",
        ]);
        Unit::create([
            "code" => "F40",
            "name" => "Kilogramo por hora kelvin",
            "simbol" => "kg/(h·K)",
        ]);
        Unit::create([
            "code" => "F41",
            "name" => "Kilogramo por minuto kelvin",
            "simbol" => "kg/(min·K)",
        ]);
        Unit::create([
            "code" => "F42",
            "name" => "Kilogramo por segundo kelvin",
            "simbol" => "kg/(s·K)",
        ]);
        Unit::create([
            "code" => "F43",
            "name" => "Miligramo por día kelvin",
            "simbol" => "mg/(d·K)",
        ]);
        Unit::create([
            "code" => "F44",
            "name" => "Miligramo por hora kelvin",
            "simbol" => "mg/(h·K)",
        ]);
        Unit::create([
            "code" => "F45",
            "name" => "Miligramo por minuto kelvin",
            "simbol" => "mg/(min·K)",
        ]);
        Unit::create([
            "code" => "F46",
            "name" => "Miligramo por segundo kelvin",
            "simbol" => "mg/(s·K)",
        ]);
        Unit::create([
            "code" => "F47",
            "name" => "Newton por milímetro",
            "simbol" => "N/mm",
        ]);
        Unit::create([
            "code" => "F48",
            "name" => "Libra fuerza por pulgada",
            "simbol" => "lbf/in",
        ]);
        Unit::create([
            "code" => "F49",
            "name" => "Rod (Uncodead de distancia)",
            "description" => "Uncodead de distancia equivalente a 5.5 yardas (16 pies 6 pulgadas)",
            "simbol" => "rd (US)",
        ]);
        Unit::create([
            "code" => "F50",
            "name" => "Micrómetro por kelvin",
            "simbol" => "µm/K",
        ]);
        Unit::create([
            "code" => "F51",
            "name" => "Centímetro por kelvin",
            "simbol" => "cm/K",
        ]);
        Unit::create([
            "code" => "F52",
            "name" => "Metro por kelvin",
            "simbol" => "m/K",
        ]);
        Unit::create([
            "code" => "F53",
            "name" => "Mililitro por kelvin",
            "simbol" => "mm/K",
        ]);
        Unit::create([
            "code" => "F54",
            "name" => "MiliOhm por metro",
            "simbol" => "mΩ/m",
        ]);
        Unit::create([
            "code" => "F55",
            "name" => "Ohm por milla (milla estatal)",
            "simbol" => "Ω/mi",
        ]);
        Unit::create([
            "code" => "F56",
            "name" => "Ohm por kilómetro",
            "simbol" => "Ω/km",
        ]);
        Unit::create([
            "code" => "F57",
            "name" => "Miliamperio por libra-fuerza por pulgada cuadrada",
            "simbol" => "mA/(lbf/in²)",
        ]);
        Unit::create([
            "code" => "F58",
            "name" => "Bar recíproco",
            "simbol" => "1/bar",
        ]);
        Unit::create([
            "code" => "F59",
            "name" => "Miliamperio por bar",
            "simbol" => "mA/bar",
        ]);
        Unit::create([
            "code" => "F60",
            "name" => "Grado celsius por bar",
            "simbol" => "°C/bar",
        ]);
        Unit::create([
            "code" => "F61",
            "name" => "Kelvin por bar",
            "simbol" => "K/bar",
        ]);
        Unit::create([
            "code" => "F62",
            "name" => "Gramo por día bar",
            "simbol" => "g/(d·bar)",
        ]);
        Unit::create([
            "code" => "F63",
            "name" => "Gramo por hora bar",
            "simbol" => "g/(h·bar)",
        ]);
        Unit::create([
            "code" => "F64",
            "name" => "Gramo por minuto bar",
            "simbol" => "g/(min·bar)",
        ]);
        Unit::create([
            "code" => "F65",
            "name" => "Gramo por segundo bar",
            "simbol" => "g/(s·bar)",
        ]);
        Unit::create([
            "code" => "F66",
            "name" => "Kililogramo por día bar",
            "simbol" => "kg/(d·bar)",
        ]);
        Unit::create([
            "code" => "F67",
            "name" => "Kilogramo por hora bar",
            "simbol" => "kg/(h·bar)",
        ]);
        Unit::create([
            "code" => "F68",
            "name" => "Kilogramo por minuto bar",
            "simbol" => "kg/(min·bar)",
        ]);
        Unit::create([
            "code" => "F69",
            "name" => "Kilogramo por segundo bar",
            "simbol" => "kg/(s·bar)",
        ]);
        Unit::create([
            "code" => "F70",
            "name" => "Miligramo por día bar",
            "simbol" => "mg/(d·bar)",
        ]);
        Unit::create([
            "code" => "F71",
            "name" => "Miligramo por hora bar",
            "simbol" => "mg/(h·bar)",
        ]);
        Unit::create([
            "code" => "F72",
            "name" => "Miligramo por minuto bar",
            "simbol" => "mg/(min·bar)",
        ]);
        Unit::create([
            "code" => "F73",
            "name" => "Miligramo por segundo bar",
            "simbol" => "mg/(s·bar)",
        ]);
        Unit::create([
            "code" => "F74",
            "name" => "Gramo por bar",
            "simbol" => "g/bar",
        ]);
        Unit::create([
            "code" => "F75",
            "name" => "Miligramo por bar",
            "simbol" => "mg/bar",
        ]);
        Unit::create([
            "code" => "F76",
            "name" => "Miliamperio por milímetro",
            "simbol" => "mA/mm",
        ]);
        Unit::create([
            "code" => "F77",
            "name" => "Pascal segundo por kelvin",
            "simbol" => "Pa.s/K",
        ]);
        Unit::create([
            "code" => "F78",
            "name" => "Pulgada de agua",
            "simbol" => "inH₂O",
        ]);
        Unit::create([
            "code" => "F79",
            "name" => "Pulgada de mercurio",
            "simbol" => "inHg",
        ]);
        Unit::create([
            "code" => "F80",
            "name" => "Caballos de fuerza de agua",
            "description" => "Define la cantcodead de potencia requercodea para mover un volumen dado de agua contra la aceleración de la gravedad a una elevación especificada (cabezal de presión).",
        ]);
        Unit::create([
            "code" => "F81",
            "name" => "Bar por kelvin",
            "simbol" => "bar/K",
        ]);
        Unit::create([
            "code" => "F82",
            "name" => "Hectopascal por kelvin",
            "simbol" => "hPa/K",
        ]);
        Unit::create([
            "code" => "F83",
            "name" => "Kilopascal por kelvin",
            "simbol" => "kPa/K",
        ]);
        Unit::create([
            "code" => "F84",
            "name" => "Milibar por kelvin",
            "simbol" => "mbar/K",
        ]);
        Unit::create([
            "code" => "F85",
            "name" => "Megapascal por kelvin",
            "simbol" => "MPa/K",
        ]);
        Unit::create([
            "code" => "F86",
            "name" => "Poise por kelvin",
            "simbol" => "P/K",
        ]);
        Unit::create([
            "code" => "F87",
            "name" => "Voltio por litro minuto",
            "simbol" => "V/(l·min)",
        ]);
        Unit::create([
            "code" => "F88",
            "name" => "Newton centímetro",
            "simbol" => "N·cm",
        ]);
        Unit::create([
            "code" => "F89",
            "name" => "Newton metro por grados",
            "simbol" => "Nm/°",
        ]);
        Unit::create([
            "code" => "F9",
            "name" => "Fibra por centímetro cúbico de aire",
        ]);
        Unit::create([
            "code" => "F90",
            "name" => "Newton metro por amperio",
            "simbol" => "N·m/A",
        ]);
        Unit::create([
            "code" => "F91",
            "name" => "Bar litro por segundo",
            "simbol" => "bar·l/s",
        ]);
        Unit::create([
            "code" => "F92",
            "name" => "Bar metro cúbico por segundo",
            "simbol" => "bar·m³/s",
        ]);
        Unit::create([
            "code" => "F93",
            "name" => "Hectopascal litro por segundo",
            "simbol" => "hPa·l/s",
        ]);
        Unit::create([
            "code" => "F94",
            "name" => "Hectopascal metro cúbico por segundo",
            "simbol" => "hPa·m³/s",
        ]);
        Unit::create([
            "code" => "F95",
            "name" => "Milibar litro por segundo",
            "simbol" => "mbar·l/s",
        ]);
        Unit::create([
            "code" => "F96",
            "name" => "Milibar metro cúbico por segundo",
            "simbol" => "mbar·m³/s",
        ]);
        Unit::create([
            "code" => "F97",
            "name" => "Megapascal litro por segundo",
            "simbol" => "MPa·l/s",
        ]);
        Unit::create([
            "code" => "F98",
            "name" => "Megapascal metro cúbico por segundo",
            "simbol" => "MPa·m³/s",
        ]);
        Unit::create([
            "code" => "F99",
            "name" => "Pascal litro por segundo",
            "simbol" => "Pa·l/s",
        ]);
        Unit::create([
            "code" => "FAH",
            "name" => "Grado fahrenheit",
            "description" => "Consulte ISO 80000-5 (Cantcodeades y uncodeades - Parte 5: Termodinámica)",
            "simbol" => "°F",
        ]);
        Unit::create([
            "code" => "FAR",
            "name" => "Farad",
            "description" => "Es la capaccodead de un condensador eléctrico que entre sus armaduras aparece una diferencia de potencial eléctrico de 1 volt, cuando está cargado con una cantcodead de electriccodead igual a 1 coulomb. ",
            "simbol" => "F",
        ]);
        Unit::create([
            "code" => "FB",
            "name" => "campo",
        ]);
        Unit::create([
            "code" => "FBM",
            "name" => "Medcodeor de fibra",
            "description" => "Uncodead de longitud que define el número de metros de fibra indivcodeual.",
        ]);
        Unit::create([
            "code" => "FC",
            "name" => "Mil pies cúbicos",
            "description" => "Uncodead de volumen igual a mil pies cúbicos.",
            "simbol" => "kft³",
        ]);
        Unit::create([
            "code" => "FD",
            "name" => "Millones de partículas por pie cúbico",
        ]);
        Unit::create([
            "code" => "FE",
            "name" => "Pie de pista",
        ]);
        Unit::create([
            "code" => "FF",
            "name" => "Cien metros cúbicos",
            "description" => "Uncodead de volumen igual a cien metros cúbicos.",
        ]);
        Unit::create([
            "code" => "FG",
            "name" => "Parche transdérmico",
        ]);
        Unit::create([
            "code" => "FH",
            "name" => "MicroMol",
            "simbol" => "µmol",
        ]);
        Unit::create([
            "code" => "FIT",
            "name" => "Fallas en el tiempo",
            "description" => "Uncodead de conteo que define el número de fallos que se pueden esperar en un intervalo de tiempo especificado. Las tasas de fallo de los componentes semiconductores se especifican a menudo como FIT (fallas en la uncodead de tiempo) donde 1 FIT = 10?? / h.",
            "simbol" => "FIT",
        ]);
        Unit::create([
            "code" => "FL",
            "name" => "Flake ton",
            "description" => "Uncodead de masa que define el número de toneladas de una sustancia en copos (escamas: un pequeño fragmento plano).",
        ]);
        Unit::create([
            "code" => "FM",
            "name" => "Millones de pies cúbicos",
            "simbol" => "Mft³",
        ]);
        Unit::create([
            "code" => "FOT",
            "name" => "Pie",
            "description" => "Uncodead de medcodea empleada por aeronautas, equivale a 30.48 cm",
            "simbol" => "ft",
        ]);
        Unit::create([
            "code" => "FP",
            "name" => "Libra por pie cuadrado",
            "simbol" => "lb/ft²",
        ]);
        Unit::create([
            "code" => "FR",
            "name" => "Pie por minuto",
            "simbol" => "ft/min",
        ]);
        Unit::create([
            "code" => "FS",
            "name" => "Pie por segundo",
            "simbol" => "ft/s",
        ]);
        Unit::create([
            "code" => "FTK",
            "name" => "Pie cuadrado",
            "description" => " Es una uncodead de superficie del sistema anglosajón de uncodeades, equivalente a un cuadrado de un pie de lado.",
            "simbol" => "ft²",
        ]);
        Unit::create([
            "code" => "FTQ",
            "name" => "Pie cúbico",
            "simbol" => "ft³",
        ]);
        Unit::create([
            "code" => "G01",
            "name" => "Pascal metro cúbico por segundo",
            "simbol" => "Pa·m³/s",
        ]);
        Unit::create([
            "code" => "G04",
            "name" => "Centímetro por bar",
            "simbol" => "cm/bar",
        ]);
        Unit::create([
            "code" => "G05",
            "name" => "Metro por bar ",
            "simbol" => "m/bar",
        ]);
        Unit::create([
            "code" => "G06",
            "name" => "Milímetro por bar ",
            "simbol" => "mm/bar",
        ]);
        Unit::create([
            "code" => "G08",
            "name" => "Pulgada cuadrada por segundo",
            "simbol" => "in²/s",
        ]);
        Unit::create([
            "code" => "G09",
            "name" => "Metro cuadrado por segundo kelvin",
            "simbol" => "m²/(s·K)",
        ]);
        Unit::create([
            "code" => "G10",
            "name" => "Stokes por kelvin",
            "simbol" => "St/K",
        ]);
        Unit::create([
            "code" => "G11",
            "name" => "Gramo por centímetro cúbico bar",
            "simbol" => "g/(cm³·bar)",
        ]);
        Unit::create([
            "code" => "G12",
            "name" => "Gramo por decímetro cúbico bar",
            "simbol" => "g/(dm³·bar)",
        ]);
        Unit::create([
            "code" => "G13",
            "name" => "Gramo por litro bar",
            "simbol" => "g/(l·bar)",
        ]);
        Unit::create([
            "code" => "G14",
            "name" => "Gramo por metro cúbico bar",
            "simbol" => "g/(m³·bar)",
        ]);
        Unit::create([
            "code" => "G15",
            "name" => "Gramo por mililitro bar",
            "simbol" => "g/(ml·bar)",
        ]);
        Unit::create([
            "code" => "G16",
            "name" => "Kilogramo por centímetro cúbico bar",
            "simbol" => "kg/(cm³·bar)",
        ]);
        Unit::create([
            "code" => "G17",
            "name" => "Kilogramo por litro bar",
            "simbol" => "kg/(l·bar)",
        ]);
        Unit::create([
            "code" => "G18",
            "name" => "Kilogramo por metro cúbico bar",
            "simbol" => "kg/(m³·bar)",
        ]);
        Unit::create([
            "code" => "G19",
            "name" => "Newton metro por kilogramo",
            "simbol" => "N·m/kg",
        ]);
        Unit::create([
            "code" => "G2",
            "name" => "Galón (EUA) por minuto",
            "simbol" => "gal (US) /min",
        ]);
        Unit::create([
            "code" => "G20",
            "name" => "Libra-fuerza pie por libra",
            "simbol" => "lbf·ft/lb",
        ]);
        Unit::create([
            "code" => "G21",
            "name" => "Taza (uncodead de volumen)",
            "simbol" => "cup (US)",
        ]);
        Unit::create([
            "code" => "G23",
            "name" => "Peck",
            "description" => "Es una uncodead de medcodea imperial y habitual en  Estados Uncodeos de volumen seco.",
            "simbol" => "pk (US)",
        ]);
        Unit::create([
            "code" => "G24",
            "name" => "Cucharada (estados uncodeos)",
            "description" => "1/2 onzas flucodeas, 3 cucharaditas, 15 mililitros",
            "simbol" => "tablespoon (US)",
        ]);
        Unit::create([
            "code" => "G25",
            "name" => "Cucharilla (estados uncodeos)",
            "description" => "1/6 onzas flucodeas o 5 mililitros",
            "simbol" => "teaspoon (US)",
        ]);
        Unit::create([
            "code" => "G26",
            "name" => "Estere",
            "simbol" => "st",
        ]);
        Unit::create([
            "code" => "G27",
            "name" => "Centímetro cúbico por kelvin",
            "simbol" => "cm³/K",
        ]);
        Unit::create([
            "code" => "G28",
            "name" => "Litro por kelvin",
            "simbol" => "l/K",
        ]);
        Unit::create([
            "code" => "G29",
            "name" => "Metro cúbico por kelvin",
            "simbol" => "m³/K",
        ]);
        Unit::create([
            "code" => "G3",
            "name" => "Galón (RU) por minuto",
            "simbol" => "gal (UK) /min",
        ]);
        Unit::create([
            "code" => "G30",
            "name" => "Mililitro por klevin",
            "simbol" => "ml/K",
        ]);
        Unit::create([
            "code" => "G31",
            "name" => "Kilogramo por centímetro cúbico",
            "simbol" => "kg/cm³",
        ]);
        Unit::create([
            "code" => "G32",
            "name" => "Onza (avoirdupois) por yarda cúbica",
            "simbol" => "oz/yd³",
        ]);
        Unit::create([
            "code" => "G33",
            "name" => "Gramo por centímetro cúbico kelvin",
            "simbol" => "g/(cm³·K)",
        ]);
        Unit::create([
            "code" => "G34",
            "name" => "Gramo por decímetro cúbico kelvin",
            "simbol" => "g/(dm³·K)",
        ]);
        Unit::create([
            "code" => "G35",
            "name" => "Gramo por litro kelvin",
            "simbol" => "g/(l·K)",
        ]);
        Unit::create([
            "code" => "G36",
            "name" => "Gramo por metro cúbico kelvin",
            "simbol" => "g/(m³·K)",
        ]);
        Unit::create([
            "code" => "G37",
            "name" => "Gramo por mililitro kelvin",
            "simbol" => "g/(ml·K)",
        ]);
        Unit::create([
            "code" => "G38",
            "name" => "Kilogramo por centímetro cúbico kelvin",
            "simbol" => "kg/(cm³·K)",
        ]);
        Unit::create([
            "code" => "G39",
            "name" => "Kilogramo por litro kelvin",
            "simbol" => "kg/(l·K)",
        ]);
        Unit::create([
            "code" => "G40",
            "name" => "Kilogramo por metro cúbico kelvin",
            "simbol" => "kg/(m³·K)",
        ]);
        Unit::create([
            "code" => "G41",
            "name" => "Metro cuadrado por segundo bar",
            "simbol" => "m²/(s·bar)",
        ]);
        Unit::create([
            "code" => "G42",
            "name" => "Microsiemens por centímetro",
            "simbol" => "µS/cm",
        ]);
        Unit::create([
            "code" => "G43",
            "name" => "Microsiemens por metro",
            "simbol" => "µS/m",
        ]);
        Unit::create([
            "code" => "G44",
            "name" => "Nanosiemens por centímetro",
            "simbol" => "nS/cm",
        ]);
        Unit::create([
            "code" => "G45",
            "name" => "Nanosiemens por metro",
            "simbol" => "nS/m",
        ]);
        Unit::create([
            "code" => "G46",
            "name" => "Stokes por bar",
            "simbol" => "St/bar",
        ]);
        Unit::create([
            "code" => "G47",
            "name" => "Centímetro cúbico por día",
            "simbol" => "cm³/d",
        ]);
        Unit::create([
            "code" => "G48",
            "name" => "Centímetro cúbico por hora",
            "simbol" => "cm³/h",
        ]);
        Unit::create([
            "code" => "G49",
            "name" => "Centímetro cúbico por minuto",
            "simbol" => "cm³/min",
        ]);
        Unit::create([
            "code" => "G50",
            "name" => "Galón por hora",
            "simbol" => "gal/h",
        ]);
        Unit::create([
            "code" => "G51",
            "name" => "Litro por segundo",
            "simbol" => "l/s",
        ]);
        Unit::create([
            "code" => "G52",
            "name" => "Metro cúbico por día",
            "simbol" => "m³/d",
        ]);
        Unit::create([
            "code" => "G53",
            "name" => "Metro cúbico por minuto",
            "simbol" => "m³/min",
        ]);
        Unit::create([
            "code" => "G54",
            "name" => "Mililitro por día",
            "simbol" => "ml/d",
        ]);
        Unit::create([
            "code" => "G55",
            "name" => "Mililitro por hora",
            "simbol" => "ml/h",
        ]);
        Unit::create([
            "code" => "G56",
            "name" => "Pulgada cúbica por hora",
            "simbol" => "in³/h",
        ]);
        Unit::create([
            "code" => "G57",
            "name" => "Pulgada cúbica por minuto",
            "simbol" => "in³/min",
        ]);
        Unit::create([
            "code" => "G58",
            "name" => "Pulgada cúbica por segundo",
            "simbol" => "in³/s",
        ]);
        Unit::create([
            "code" => "G59",
            "name" => "Miliamperio por litro minuto",
            "simbol" => "mA/(l·min)",
        ]);
        Unit::create([
            "code" => "G60",
            "name" => "Voltio por bar",
            "simbol" => "V/bar",
        ]);
        Unit::create([
            "code" => "G61",
            "name" => "Centímetro cúbico por día kelvin",
            "simbol" => "cm³/(d·K)",
        ]);
        Unit::create([
            "code" => "G62",
            "name" => "Centímetro cúbico por hora kelvin",
            "simbol" => "cm³/(h·K)",
        ]);
        Unit::create([
            "code" => "G63",
            "name" => "Centímetro cúbico por minuto kelvin",
            "simbol" => "cm³/(min·K)",
        ]);
        Unit::create([
            "code" => "G64",
            "name" => "Centímetro cúbico por segundo kelvin",
            "simbol" => "cm³/(s·K)",
        ]);
        Unit::create([
            "code" => "G65",
            "name" => "Litro por día kelvin",
            "simbol" => "l/(d·K)",
        ]);
        Unit::create([
            "code" => "G66",
            "name" => "Litro por hora kelvin",
            "simbol" => "l/(h·K)",
        ]);
        Unit::create([
            "code" => "G67",
            "name" => "Litro por minuto kelvin",
            "simbol" => "l/(min·K)",
        ]);
        Unit::create([
            "code" => "G68",
            "name" => "Litro por segundo kelvin",
            "simbol" => "l/(s·K)",
        ]);
        Unit::create([
            "code" => "G69",
            "name" => "Metro cúbico por día kelvin",
            "simbol" => "m³/(d·K)",
        ]);
        Unit::create([
            "code" => "G7",
            "name" => "Hoja de microficha",
        ]);
        Unit::create([
            "code" => "G70",
            "name" => "Metro cúbico por hora kelvin",
            "simbol" => "m³/(h·K)",
        ]);
        Unit::create([
            "code" => "G71",
            "name" => "Metro cúbico por minuto kelvin",
            "simbol" => "m³/(min·K)",
        ]);
        Unit::create([
            "code" => "G72",
            "name" => "Metro cúbico por segundo kelvin",
            "simbol" => "m³/(s·K)",
        ]);
        Unit::create([
            "code" => "G73",
            "name" => "Mililitro por día kelvin",
            "simbol" => "ml/(d·K)",
        ]);
        Unit::create([
            "code" => "G74",
            "name" => "Mililitro por hora kelvin",
            "simbol" => "ml/(h·K)",
        ]);
        Unit::create([
            "code" => "G75",
            "name" => "Mililitro por minuto kelvin",
            "simbol" => "ml/(min·K)",
        ]);
        Unit::create([
            "code" => "G76",
            "name" => "Mililitro por segundo kelvin",
            "simbol" => "ml/(s·K)",
        ]);
        Unit::create([
            "code" => "G77",
            "name" => "Milímetro a la cuarta potencia ",
            "simbol" => "mm⁴",
        ]);
        Unit::create([
            "code" => "G78",
            "name" => "Centímetro cúbico por día bar",
            "simbol" => "cm³/(d·bar)",
        ]);
        Unit::create([
            "code" => "G79",
            "name" => "Centímetro cúbico por hora bar",
            "simbol" => "cm³/(h·bar)",
        ]);
        Unit::create([
            "code" => "G80",
            "name" => "Centímetro cúbico por minuto bar",
            "simbol" => "cm³/(min·bar)",
        ]);
        Unit::create([
            "code" => "G81",
            "name" => "Centímetro cúbico por segundo bar",
            "simbol" => "cm³/(s·bar)",
        ]);
        Unit::create([
            "code" => "G82",
            "name" => "Litro por día bar",
            "simbol" => "l/(d·bar)",
        ]);
        Unit::create([
            "code" => "G83",
            "name" => "Litro por hora bar",
            "simbol" => "l/(h·bar)",
        ]);
        Unit::create([
            "code" => "G84",
            "name" => "Litro por minuto bar",
            "simbol" => "l/(min·bar)",
        ]);
        Unit::create([
            "code" => "G85",
            "name" => "Litro por segundo bar",
            "simbol" => "l/(s·bar)",
        ]);
        Unit::create([
            "code" => "G86",
            "name" => "Metro cúbico por día bar",
            "simbol" => "m³/(d·bar)",
        ]);
        Unit::create([
            "code" => "G87",
            "name" => "Metro cúbico por hora bar",
            "simbol" => "m³/(h·bar)",
        ]);
        Unit::create([
            "code" => "G88",
            "name" => "Metro cúbico por minuto bar",
            "simbol" => "m³/(min·bar)",
        ]);
        Unit::create([
            "code" => "G89",
            "name" => "Metro cúbico por segundo bar",
            "simbol" => "m³/(s·bar)",
        ]);
        Unit::create([
            "code" => "G90",
            "name" => "Mililitro por día bar",
            "simbol" => "ml/(d·bar)",
        ]);
        Unit::create([
            "code" => "G91",
            "name" => "Mililitro por hora bar",
            "simbol" => "ml/(h·bar)",
        ]);
        Unit::create([
            "code" => "G92",
            "name" => "Mililitro por minuto bar",
            "simbol" => "ml/(min·bar)",
        ]);
        Unit::create([
            "code" => "G93",
            "name" => "Mililitro por segundo bar",
            "simbol" => "ml/(s·bar)",
        ]);
        Unit::create([
            "code" => "G94",
            "name" => "Centímetro cúbico por bar",
            "simbol" => "cm³/bar",
        ]);
        Unit::create([
            "code" => "G95",
            "name" => "Litro por bar",
            "simbol" => "l/bar",
        ]);
        Unit::create([
            "code" => "G96",
            "name" => "Metro cúbico por bar",
            "simbol" => "m³/bar",
        ]);
        Unit::create([
            "code" => "G97",
            "name" => "Mililitro por bar ",
            "simbol" => "ml/bar",
        ]);
        Unit::create([
            "code" => "G98",
            "name" => "Micro henry por kiloOhm",
            "simbol" => "µH/kΩ",
        ]);
        Unit::create([
            "code" => "G99",
            "name" => "Micro henry por Ohm",
            "simbol" => "µH/Ω",
        ]);
        Unit::create([
            "code" => "GB",
            "name" => "Galón (EUA) por día",
            "simbol" => "gal (US)/d",
        ]);
        Unit::create([
            "code" => "GBQ",
            "name" => "Gigabecquerel",
            "simbol" => "GBq",
        ]);
        Unit::create([
            "code" => "GC",
            "name" => "Gramo por 100 gramos",
        ]);
        Unit::create([
            "code" => "Gd",
            "name" => "Barril bruto",
        ]);
        Unit::create([
            "code" => "GDW",
            "name" => "Gramo, peso seco",
            "description" => "Uncodead de masa que define el número de gramos de un producto, sin tener en cuenta el contencodeo de agua del producto.",
        ]);
        Unit::create([
            "code" => "GE",
            "name" => "Libra por galón (EUA)",
            "simbol" => "lb/gal (US)",
        ]);
        Unit::create([
            "code" => "GF",
            "name" => "Gramo por metro (gramo por 100 centímetros)",
            "simbol" => "g/m",
        ]);
        Unit::create([
            "code" => "GFI",
            "name" => "Gramo de isótopo fisible",
            "description" => "Uncodead de masa que define el número de gramos de un isótopo fisible (isótopo fisible: un isótopo cuyo núcleo es capaz de ser divcodecodeo cuando se irradia con neutrones de baja energía).",
            "simbol" => "gi F/S",
        ]);
        Unit::create([
            "code" => "GGR",
            "name" => "Grandioso",
            "description" => "Uncodead de cuenta que define el número de uncodeades en múltiplos de 1728 (12 x 12 x 12).",
        ]);
        Unit::create([
            "code" => "GH",
            "name" => "Medio galón (US)",
        ]);
        Unit::create([
            "code" => "GIA",
            "name" => "Gill (us)",
            "description" => "Es Uncodead de volumen inglesa en el sistema imperial y en los Estados Uncodeos. La versión imperial usada en el UK es de 5 onzas líqucodeas, y es equivalente a 142,0653125 ml; mientras que en los EUA es de 4 onzas líqucodeas, y es equivalente a 118,29411825 ml.",
            "simbol" => "gi (US)",
        ]);
        Unit::create([
            "code" => "GIC",
            "name" => "Gramo, inclucodeo el contenedor",
            "description" => "Uncodead de masa que define el número de gramos de un producto, incluyendo su recipiente.",
        ]);
        Unit::create([
            "code" => "GII",
            "name" => "Gill (uk)",
            "description" => "Es Uncodead de volumen inglesa en el sistema imperial y en los Estados Uncodeos. La versión imperial usada en el UK es de 5 onzas líqucodeas, y es equivalente a 142.0653125 ml; mientras que en los EUA es de 4 onzas líqucodeas, y es equivalente a 118.29411825 ml.",
            "simbol" => "gi (UK)",
        ]);
        Unit::create([
            "code" => "GIP",
            "name" => "Grama, inclucodeo el embalaje interior",
            "description" => "Uncodead de masa que define el número de gramos de un producto, incluyendo sus materiales de envasado interior.",
        ]);
        Unit::create([
            "code" => "GJ",
            "name" => "Gramo por mililitro",
            "simbol" => "g/ml",
        ]);
        Unit::create([
            "code" => "GK",
            "name" => "Gramo por kilogramo",
        ]);
        Unit::create([
            "code" => "GL",
            "name" => "Gramo por litro",
            "simbol" => "g/l",
        ]);
        Unit::create([
            "code" => "GLD",
            "name" => "Galón seco (EUA)",
            "simbol" => "dry gal (US)",
        ]);
        Unit::create([
            "code" => "GLI",
            "name" => "Galón (UK)",
            "description" => "Es una uncodead de volumen que se emplea en los países anglófonos (especialmente Estados Uncodeos) o con influencia de estos (como Liberia, Guatemala, Panamá, Honduras, Nicaragua, El Salvador, Colombia y parcialmente en México), para medir volúmenes de líqucodeos, principalmente la gasolina y su precio. Antiguamente, el volumen de un galón dependía de lo que se mcodeiera, y dónde. Sin embargo, en el siglo XIX existían dos definiciones de uso común: \"galón de vino\" (wine gallon) y \"galón de cerveza británico\" (ale gallon).\r\nEs equivalente a 3.7854 litros.",
            "simbol" => "gal (UK)",
        ]);
        Unit::create([
            "code" => "GLL",
            "name" => "Galón (EUA)",
            "description" => "Es una uncodead de volumen que se emplea en los países anglófonos (especialmente Estados Uncodeos) o con influencia de estos (como Liberia, Guatemala, Panamá, Honduras, Nicaragua, El Salvador, Colombia y parcialmente en México), para medir volúmenes de líqucodeos, principalmente la gasolina y su precio. Antiguamente, el volumen de un galón dependía de lo que se mcodeiera, y dónde. Sin embargo, en el siglo XIX existían dos definiciones de uso común: \"galón de vino\" (wine gallon) y \"galón de cerveza británico\" (ale gallon).",
            "simbol" => "gal (US)",
        ]);
        Unit::create([
            "code" => "GM",
            "name" => "Gramo por metro cuadrado",
            "simbol" => "g/m²",
        ]);
        Unit::create([
            "code" => "GN",
            "name" => "Galón bruto",
        ]);
        Unit::create([
            "code" => "GO",
            "name" => "Miligramo por metro cuadrado",
            "simbol" => "mg/m²",
        ]);
        Unit::create([
            "code" => "GP",
            "name" => "Miligramo por metro cúbico",
            "simbol" => "mg/m³",
        ]);
        Unit::create([
            "code" => "GQ",
            "name" => "Microgramo por metro cúbico",
            "simbol" => "µg/m³",
        ]);
        Unit::create([
            "code" => "GRM",
            "name" => "Gramo",
            "description" => "Medcodea de masa, de símbolo g, que es igual a la milésima parte de un kilogramo.",
            "simbol" => "g",
        ]);
        Unit::create([
            "code" => "GRN",
            "name" => "Grano",
            "description" => "Es la mínima uncodead de masa en el sistema inglés de medcodeas. Se conscodeera con el mismo valor en cualquier país anglosajón. Se utiliza para estimar con más sensibilcodead y precisión la poca masa de pequeños objetos (medicamentos, drogas, pólvora, proyectiles, piezas de joyería, etc.).",
            "simbol" => "gr",
        ]);
        Unit::create([
            "code" => "GRO",
            "name" => "Gross",
            "description" => "Uncodead de conteo que define el número de uncodeades en múltiplos de 144 (12 x 12).",
            "simbol" => "gr",
        ]);
        Unit::create([
            "code" => "GT",
            "name" => "Tonelada bruta",
            "description" => "Una uncodead de masa igual a 2240 libras. Véase el Convenio internacional sobre arqueo de buques.\r\n\r\nSinónimo: ton (UK) o tonelada larga (US) (código común LTN) ",
        ]);
        Unit::create([
            "code" => "GV",
            "name" => "Gigajoule",
            "simbol" => "GJ",
        ]);
        Unit::create([
            "code" => "GW",
            "name" => "Galón por mil pies cúbicos",
        ]);
        Unit::create([
            "code" => "GWH",
            "name" => "Gigawatt hora",
            "simbol" => "GW·h",
        ]);
        Unit::create([
            "code" => "GY",
            "name" => "Patio grueso",
        ]);
        Unit::create([
            "code" => "GZ",
            "name" => "Sistema de calibración",
        ]);
        Unit::create([
            "code" => "H03",
            "name" => "Henry por kiloOhm",
            "simbol" => "H/kΩ",
        ]);
        Unit::create([
            "code" => "H04",
            "name" => "Henry por Ohm",
            "simbol" => "H/Ω",
        ]);
        Unit::create([
            "code" => "H05",
            "name" => "Milihenry por kiloOhm",
            "simbol" => "mH/kΩ",
        ]);
        Unit::create([
            "code" => "H06",
            "name" => "Milihenry por Ohm",
            "simbol" => "mH/Ω",
        ]);
        Unit::create([
            "code" => "H07",
            "name" => "Pascal segundo por bar",
            "simbol" => "Pa·s/bar",
        ]);
        Unit::create([
            "code" => "H08",
            "name" => "Microbequerel",
            "simbol" => "µBq",
        ]);
        Unit::create([
            "code" => "H09",
            "name" => "Año recíproco",
            "simbol" => "1/y",
        ]);
        Unit::create([
            "code" => "H1",
            "name" => "Media página - electrónica",
        ]);
        Unit::create([
            "code" => "H10",
            "name" => "Hora recíproca",
            "simbol" => "1/h",
        ]);
        Unit::create([
            "code" => "H11",
            "name" => "Mes recíproco",
            "simbol" => "1/mo",
        ]);
        Unit::create([
            "code" => "H12",
            "name" => "Grado celsius por hora",
            "simbol" => "°C/h",
        ]);
        Unit::create([
            "code" => "H13",
            "name" => "Grado celsius por minuto",
            "simbol" => "°C/min",
        ]);
        Unit::create([
            "code" => "H14",
            "name" => "Grado celsius por segundo",
            "simbol" => "°C/s",
        ]);
        Unit::create([
            "code" => "H15",
            "name" => "Centímetro cudrado por gramo",
            "simbol" => "cm²/g",
        ]);
        Unit::create([
            "code" => "H16",
            "name" => "Decámetro cuadrado",
            "simbol" => "dam²",
        ]);
        Unit::create([
            "code" => "H18",
            "name" => "Hectómetro cuadrado",
            "description" => "Sinónimo: hectárea",
            "simbol" => "hm²",
        ]);
        Unit::create([
            "code" => "H19",
            "name" => "Hectómetro cúbico",
            "simbol" => "hm³",
        ]);
        Unit::create([
            "code" => "H2",
            "name" => "Medio litro",
        ]);
        Unit::create([
            "code" => "H20",
            "name" => "Kilómetro cúbico",
            "simbol" => "km³",
        ]);
        Unit::create([
            "code" => "H21",
            "name" => "Blanco",
            "description" => "Uncodead de conteo que define el número de blancos",
        ]);
        Unit::create([
            "code" => "H22",
            "name" => "Voltio pulgada cuadrada por libra fuerza",
            "simbol" => "V/(lbf/in²)",
        ]);
        Unit::create([
            "code" => "H23",
            "name" => "Voltio por pulgada",
            "simbol" => "V/in",
        ]);
        Unit::create([
            "code" => "H24",
            "name" => "Voltio por microsegundo",
            "simbol" => "V/µs",
        ]);
        Unit::create([
            "code" => "H25",
            "name" => "Por ciento por kelvin",
            "description" => "Uncodead de proporción, igual a 0,01, en relación con la uncodead de base SI Kelvin.",
            "simbol" => "%/K",
        ]);
        Unit::create([
            "code" => "H26",
            "name" => "Ohm por metro",
            "simbol" => "Ω/m",
        ]);
        Unit::create([
            "code" => "H27",
            "name" => "Grado por metro",
            "simbol" => "°/m",
        ]);
        Unit::create([
            "code" => "H28",
            "name" => "Microfaradio por kilómetro",
            "simbol" => "µF/km",
        ]);
        Unit::create([
            "code" => "H29",
            "name" => "Microgramo por litro",
            "simbol" => "µg/l",
        ]);
        Unit::create([
            "code" => "H30",
            "name" => "Micrómetro cuadrado",
            "simbol" => "µm²",
        ]);
        Unit::create([
            "code" => "H31",
            "name" => "Amperio por kilogramo",
            "simbol" => "A/kg",
        ]);
        Unit::create([
            "code" => "H32",
            "name" => "Amperio cuadrado segundo",
            "description" => "Es una uncodead de medcodea basada en la energía o el calor que se permite pasar a través del fusible o interruptor durante una condición de cortocircuito.",
            "simbol" => "A²·s",
        ]);
        Unit::create([
            "code" => "H33",
            "name" => "Faradio por kilómetro",
            "simbol" => "F/km",
        ]);
        Unit::create([
            "code" => "H34",
            "name" => "Hertz metro",
            "simbol" => "Hz·m",
        ]);
        Unit::create([
            "code" => "H35",
            "name" => "Kelvin metro por watt",
            "simbol" => "K·m/W",
        ]);
        Unit::create([
            "code" => "H36",
            "name" => "MegaOhm por kilómetro",
            "simbol" => "MΩ/km",
        ]);
        Unit::create([
            "code" => "H37",
            "name" => "MegaOhm por metro",
            "simbol" => "MΩ/m",
        ]);
        Unit::create([
            "code" => "H38",
            "name" => "Megaamperio",
            "simbol" => "MA",
        ]);
        Unit::create([
            "code" => "H39",
            "name" => "Megahertz kilómetro",
            "simbol" => "MHz·km",
        ]);
        Unit::create([
            "code" => "H40",
            "name" => "Newton por amperio",
            "simbol" => "N/A",
        ]);
        Unit::create([
            "code" => "H41",
            "name" => "Newton metro watts elevado a la potencia menos 0.5",
            "simbol" => "N·m·W⁻⁰‧⁵",
        ]);
        Unit::create([
            "code" => "H42",
            "name" => "Pascal por metro",
            "simbol" => "Pa/m",
        ]);
        Unit::create([
            "code" => "H43",
            "name" => "Siemens por centímetro",
            "simbol" => "S/cm",
        ]);
        Unit::create([
            "code" => "H44",
            "name" => "TeraOhm",
            "simbol" => "TΩ",
        ]);
        Unit::create([
            "code" => "H45",
            "name" => "Voltio segundo por metro",
            "simbol" => "V·s/m",
        ]);
        Unit::create([
            "code" => "H46",
            "name" => "Voltio por segundo",
            "simbol" => "V/s",
        ]);
        Unit::create([
            "code" => "H47",
            "name" => "Watt por metro cúbico",
            "simbol" => "W/m³",
        ]);
        Unit::create([
            "code" => "H48",
            "name" => "Attofarad",
            "simbol" => "aF",
        ]);
        Unit::create([
            "code" => "H49",
            "name" => "Centímetro por hora",
            "simbol" => "cm/h",
        ]);
        Unit::create([
            "code" => "H50",
            "name" => "Reciproccodead del centimetro cúbico",
            "simbol" => "cm⁻³",
        ]);
        Unit::create([
            "code" => "H51",
            "name" => "Decibel per kilometro",
            "simbol" => "dB/km",
        ]);
        Unit::create([
            "code" => "H52",
            "name" => "Decibel per metro",
            "simbol" => "dB/m",
        ]);
        Unit::create([
            "code" => "H53",
            "name" => "Kilogramo por bar",
            "simbol" => "kg/bar",
        ]);
        Unit::create([
            "code" => "H54",
            "name" => "Kilogramo por decímetro cúbico kelvin ",
            "simbol" => "(kg/dm³)/K",
        ]);
        Unit::create([
            "code" => "H55",
            "name" => "Kilogramo por decímetro cúbico bar",
            "simbol" => "(kg/dm³)/bar",
        ]);
        Unit::create([
            "code" => "H56",
            "name" => "Kilogramo por metro cuadrado segundo",
            "simbol" => "kg/(m²·s)",
        ]);
        Unit::create([
            "code" => "H57",
            "name" => "Pulgada por dos pi por radián",
            "simbol" => "in/revolution",
        ]);
        Unit::create([
            "code" => "H58",
            "name" => "Metro por voltio segundo",
            "simbol" => "m/(V·s)",
        ]);
        Unit::create([
            "code" => "H59",
            "name" => "Metro cuadrado por newton",
            "simbol" => "m²/N",
        ]);
        Unit::create([
            "code" => "H60",
            "name" => "Metro cúbico por metro cúbico",
            "simbol" => "m³/m³",
        ]);
        Unit::create([
            "code" => "H61",
            "name" => "Milisiemens por centímetro",
            "simbol" => "mS/cm",
        ]);
        Unit::create([
            "code" => "H62",
            "name" => "Milivoltio por minuto",
            "simbol" => "mV/min",
        ]);
        Unit::create([
            "code" => "H63",
            "name" => "Miligramo por centímetro cuadrado",
            "simbol" => "mg/cm²",
        ]);
        Unit::create([
            "code" => "H64",
            "name" => "Miligramo por gramo",
            "simbol" => "mg/g",
        ]);
        Unit::create([
            "code" => "H65",
            "name" => "Mililitro por metro cúbico",
            "simbol" => "ml/m³",
        ]);
        Unit::create([
            "code" => "H66",
            "name" => "Milímetro por año ",
            "simbol" => "mm/y",
        ]);
        Unit::create([
            "code" => "H67",
            "name" => "Milímetro por hora",
            "simbol" => "mm/h",
        ]);
        Unit::create([
            "code" => "H68",
            "name" => "MiliMol por gram",
            "simbol" => "mmol/g",
        ]);
        Unit::create([
            "code" => "H69",
            "name" => "Picopascal por kilometro",
            "simbol" => "pPa/km",
        ]);
        Unit::create([
            "code" => "H70",
            "name" => "Picosegundo",
            "simbol" => "ps",
        ]);
        Unit::create([
            "code" => "H71",
            "name" => "Por ciento al mes",
            "description" => "Uncodead de proporción, igual a 0,01, en relación a un mes.",
            "simbol" => "%/mo",
        ]);
        Unit::create([
            "code" => "H72",
            "name" => "Por ciento por hectobar",
            "description" => "Uncodead de proporción, igual a 0,01, en relación con 100 veces la barra unitaria",
            "simbol" => "%/hbar",
        ]);
        Unit::create([
            "code" => "H73",
            "name" => "Por ciento por decakelvin",
            "description" => "Uncodead de proporción, igual a 0,01, en relación con 10 veces la uncodead de base SI Kelvin",
            "simbol" => "%/daK",
        ]);
        Unit::create([
            "code" => "H74",
            "name" => "Watt por metro",
            "simbol" => "W/m",
        ]);
        Unit::create([
            "code" => "H75",
            "name" => "Decapascal",
            "simbol" => "daPa",
        ]);
        Unit::create([
            "code" => "H76",
            "name" => "Gramo por milímetro",
            "simbol" => "g/mm",
        ]);
        Unit::create([
            "code" => "H77",
            "name" => "Anchura del módulo",
            "description" => "Uncodead de medcodea utilizada para describir la anchura de los conjuntos electrónicos como una norma de instalación o una dimensión de montaje.",
            "simbol" => "MW",
        ]);
        Unit::create([
            "code" => "H78",
            "name" => "Centímetro convencional de agua",
            "simbol" => "Cm H $ ₂ $ O",
        ]);
        Unit::create([
            "code" => "H79",
            "name" => "Escala francesa ",
            "description" => "Uncodead de longitud usada para la medición de los diámetros de pequeños tubos como instrumentos urológicos y catéteres.                                                       \r\nSinónimos: Francés, Charrière, Charrière gauge.",
            "simbol" => "Fg",
        ]);
        Unit::create([
            "code" => "H80",
            "name" => "Uncodead de bastcodeor",
            "description" => "Uncodead de medcodea utilizada para describir la altura en uncodeades de bastcodeor del equipo destinado a ser montado en un bastcodeor de 19 pulgadas o un bastcodeor de 23 pulgadas. Uncodead de bastcodeor tiene 1,45 pulgadas (44,45 mm) de alto.",
            "simbol" => "U or RU",
        ]);
        Unit::create([
            "code" => "H81",
            "name" => "Milímetro por minuto",
            "simbol" => "mm/min",
        ]);
        Unit::create([
            "code" => "H82",
            "name" => "Punto grande",
            "description" => "Uncodead de longitud que define el número de puntos grandes (punto grande: el software de Adobe (EUA) define el punto grande a ser exactamente 1/72 de pulgada (0,013 888 9 pulgadas o 0,352 777 8 milímetros)",
            "simbol" => "bp",
        ]);
        Unit::create([
            "code" => "H83",
            "name" => "Litro por kilogramo",
            "simbol" => "l/kg",
        ]);
        Unit::create([
            "code" => "H84",
            "name" => "Gramos milímetro",
            "simbol" => "g·mm",
        ]);
        Unit::create([
            "code" => "H85",
            "name" => "Semana recíproca",
            "simbol" => "1/wk",
        ]);
        Unit::create([
            "code" => "H87",
            "name" => "Pieza",
            "description" => "Uncodead de conteo que define el número de piezas (pieza: un solo artículo, artículo o ejemplar).",
        ]);
        Unit::create([
            "code" => "H88",
            "name" => "MegaOhm kilómetro",
            "simbol" => "MΩ·km",
        ]);
        Unit::create([
            "code" => "H89",
            "name" => "Por ciento por Ohmio",
            "description" => "Uncodead de proporción, igual a 0,01, en relación con un ángulo de un grado.",
            "simbol" => "%/Ω",
        ]);
        Unit::create([
            "code" => "H90",
            "name" => "Porcentaje por grado",
            "description" => "Uncodead de proporción, igual a 0,01, en relación a múltiplos de diez mil.",
            "simbol" => "%/°",
        ]);
        Unit::create([
            "code" => "H91",
            "name" => "Por ciento por cada diez mil",
            "description" => "Uncodead de proporción, igual a 0,01, en relación a múltiplos de cien mil.",
            "simbol" => "%/10000",
        ]);
        Unit::create([
            "code" => "H92",
            "name" => "Ciento por cien mil",
            "description" => "Uncodead de proporción, igual a 0,01, en relación a múltiplos de cien.",
            "simbol" => "%/100000",
        ]);
        Unit::create([
            "code" => "H93",
            "name" => "Porcentaje por cien",
            "description" => "Uncodead de proporción, igual a 0,01, en relación a múltiplos de mil.",
            "simbol" => "%/100",
        ]);
        Unit::create([
            "code" => "H94",
            "name" => "Por ciento por mil",
            "description" => "Uncodead de proporción, igual a 0,01, en relación con la uncodead derivada de SI volt.",
            "simbol" => "%/1000",
        ]);
        Unit::create([
            "code" => "H95",
            "name" => "Por ciento por voltio",
            "description" => "Uncodead de proporción, igual a 0,01, en relación con una presión atmosférica de una barra.",
            "simbol" => "%/V",
        ]);
        Unit::create([
            "code" => "H96",
            "name" => "Tanto por ciento por bar",
            "description" => "Uncodead de proporción, igual a 0,01, en relación con una presión atmosférica de una barra.",
            "simbol" => "%/bar",
        ]);
        Unit::create([
            "code" => "H98",
            "name" => "Por ciento por pulgada",
            "description" => "Uncodead de proporción, igual a 0,01, en relación a una pulgada.",
            "simbol" => "%/in",
        ]);
        Unit::create([
            "code" => "H99",
            "name" => "Por ciento por metro",
            "description" => "Uncodead de proporción, igual a 0,01, en relación con un metro.",
            "simbol" => "%/m",
        ]);
        Unit::create([
            "code" => "HA",
            "name" => "Madeja",
            "description" => "Uncodead de longitud, típicamente para el hilado.",
        ]);
        Unit::create([
            "code" => "HAR",
            "name" => "hectárea",
            "description" => "Sinónimo: hectómetro cuadrado",
            "simbol" => "decir ah",
        ]);
        Unit::create([
            "code" => "HBA",
            "name" => "Hectobar ",
            "simbol" => "hbar",
        ]);
        Unit::create([
            "code" => "HBX",
            "name" => "Ciento de cajas",
            "description" => "Uncodead de conteo que define el número de cajas en múltiplos de cien uncodeades de caja.",
        ]);
        Unit::create([
            "code" => "HC",
            "name" => "Conteo en cientos",
            "description" => "Uncodead de cuenta que define el número de uncodeades contadas en múltiplos de 100.",
        ]);
        Unit::create([
            "code" => "HD",
            "name" => "Media docena",
        ]);
        Unit::create([
            "code" => "HDW",
            "name" => "Cien kilogramos, peso seco",
            "description" => "Uncodead de masa que define el número de cien kilogramos de un producto, sin tener en cuenta el contencodeo de agua del producto.",
        ]);
        Unit::create([
            "code" => "HE",
            "name" => "Centésima de un quilate",
        ]);
        Unit::create([
            "code" => "HEA",
            "name" => "Cabeza",
            "description" => "Uncodead de conteo que define el número de cabezas (cabeza: persona o animal conscodeerada como un número.",
        ]);
        Unit::create([
            "code" => "HF",
            "name" => "Cien pies",
        ]);
        Unit::create([
            "code" => "HGM",
            "name" => "Héctogramo",
            "simbol" => "hg",
        ]);
        Unit::create([
            "code" => "HH",
            "name" => "Cien pies cúbicos",
            "description" => "Uncodead de volumen igual a cien pies cúbicos.",
        ]);
        Unit::create([
            "code" => "HI",
            "name" => "Cien hojas",
        ]);
        Unit::create([
            "code" => "HIU",
            "name" => "Uncodead internacional de cien",
            "description" => "Uncodead de cuenta que define el número de uncodeades internacionales en múltiplos de 100.",
        ]);
        Unit::create([
            "code" => "HJ",
            "name" => "Potencia métrica",
            "simbol" => "Hp métrico",
        ]);
        Unit::create([
            "code" => "HK",
            "name" => "Cien kilogramos",
        ]);
        Unit::create([
            "code" => "HKM",
            "name" => "Cien kilogramos, masa neta",
            "description" => "Uncodead de masa que define el número de cientos de kilogramos de un producto, después de las deducciones.",
        ]);
        Unit::create([
            "code" => "HL",
            "name" => "Cien pies (lineal)",
        ]);
        Unit::create([
            "code" => "HLT",
            "name" => "Hectolitro",
            "description" => "Es una uncodead de volumen equivalente a cien litros, representado por el símbolo hl. Es el segundo múltiplo del litro y también equivale a 100 decímetros cúbicos (0,1 metros cúbicos).",
            "simbol" => "hl",
        ]);
        Unit::create([
            "code" => "HM",
            "name" => "Milla por hora (milla estatal)",
            "simbol" => "mile/h",
        ]);
        Unit::create([
            "code" => "HMQ",
            "name" => "Millones de metros cúbicos",
            "description" => "Uncodead de volumen igual a un millón de metros cúbicos.",
            "simbol" => "Mm³",
        ]);
        Unit::create([
            "code" => "HMT",
            "name" => "Hectómetro",
            "description" => "Es una uncodead de longitud. Equivale a 100 metros. Hecto es el prefijo para 100 en el Sistema Internacional de Uncodeades.",
            "simbol" => "hm",
        ]);
        Unit::create([
            "code" => "HN",
            "name" => "Milímetro convencional de mercurio",
            "simbol" => "Mm Hg",
        ]);
        Unit::create([
            "code" => "HO",
            "name" => "Cien onzas troy",
        ]);
        Unit::create([
            "code" => "HP",
            "name" => "Milímetro convencional de agua",
            "simbol" => "Mm H $ ₂ $ O",
        ]);
        Unit::create([
            "code" => "HPA",
            "name" => "Hectolitro de alcohol puro",
            "description" => "Uncodead de volumen igual a cien litros de alcohol puro.",
        ]);
        Unit::create([
            "code" => "HS",
            "name" => "Cien pies cuadrados",
        ]);
        Unit::create([
            "code" => "HT",
            "name" => "media hora",
        ]);
        Unit::create([
            "code" => "HTZ",
            "name" => "Hertz",
            "description" => "Uncodead de frecuencia del Sistema Internacional, de símbolo Hz, que equivale a la frecuencia de un fenómeno periódico cuyo período es 1 segundo.",
            "simbol" => "Hz",
        ]);
        Unit::create([
            "code" => "HUR",
            "name" => "Hora",
            "description" => "Es una uncodead de tiempo que se corresponde con la vigésimo-cuarta parte de un día solar medio.",
            "simbol" => "h",
        ]);
        Unit::create([
            "code" => "HY",
            "name" => "Cien yardas",
        ]);
        Unit::create([
            "code" => "IA",
            "name" => "Pulgada libra",
            "simbol" => "in·lb",
        ]);
        Unit::create([
            "code" => "IC",
            "name" => "Contar por pulgada",
        ]);
        Unit::create([
            "code" => "IE",
            "name" => "Personas",
            "description" => "Uncodead de conteo que define el número de personas.",
        ]);
        Unit::create([
            "code" => "IF",
            "name" => "Pulgadas de agua",
            "description" => "Use una pulgada de agua (código común F78)",
        ]);
        Unit::create([
            "code" => "II",
            "name" => "Columna pulgada",
        ]);
        Unit::create([
            "code" => "IM",
            "name" => "Impresión",
        ]);
        Unit::create([
            "code" => "INH",
            "name" => "Pulgada",
            "description" => "Es una uncodead de longitud antropométrica que equivale al ancho de la primera falange del pulgar, y más específicamente a su falange distal.",
            "simbol" => "in",
        ]);
        Unit::create([
            "code" => "INK",
            "name" => "Pulgada cuadrada",
            "description" => "Es una uncodead de medcodea imperial, equivalente a la superficie de un cuadrado cuyo lado posee 1 pulgada de longitud (2,54 centímetros).",
            "simbol" => "in²",
        ]);
        Unit::create([
            "code" => "INQ",
            "name" => "Pulgada cúbica",
            "description" => "Sinónimo: pulgada cuadrada",
            "simbol" => "in³",
        ]);
        Unit::create([
            "code" => "IP",
            "name" => "póliza de seguros",
        ]);
        Unit::create([
            "code" => "ISD",
            "name" => "Grado internacional de azúcar",
            "description" => "Uncodead de medcodea que define el contencodeo de azúcar de una solución, expresada en grados.",
        ]);
        Unit::create([
            "code" => "IT",
            "name" => "Recuento por centímetro",
        ]);
        Unit::create([
            "code" => "IU",
            "name" => "Pulgada por segundo",
            "simbol" => "in/s",
        ]);
        Unit::create([
            "code" => "IV",
            "name" => "Pulgada por segundo al cuadrado",
            "simbol" => "in/s²",
        ]);
        Unit::create([
            "code" => "J10",
            "name" => "Por ciento por milímetro",
            "description" => "Uncodead de proporción, igual a 0,01, en relación a un milímetro.",
            "simbol" => "%/mm",
        ]);
        Unit::create([
            "code" => "J12",
            "name" => "Por mille por psi",
            "description" => "Uncodead de presión igual a una milésima de psi (libra-fuerza por pulgada cuadrada).",
            "simbol" => "‰/psi",
        ]);
        Unit::create([
            "code" => "J13",
            "name" => "Grado api",
            "description" => "Uncodead de denscodead relativa como una medcodea de cuán pesado o ligero es un líqucodeo de petróleo comparado con agua (API: American Petroleum Institute).",
            "simbol" => "°API",
        ]);
        Unit::create([
            "code" => "J14",
            "name" => "Grado baume (escala de origen)",
            "description" => "Uncodead tradicional de denscodead relativa para líqucodeos. Nombrado en honor de Antoine Baumé.",
            "simbol" => "°Bé",
        ]);
        Unit::create([
            "code" => "J15",
            "name" => "Grado baume (us pesado)",
            "description" => "Uncodead de denscodead relativa para líqucodeos más pesados que el agua.",
            "simbol" => "°Bé (US heavy)",
        ]);
        Unit::create([
            "code" => "J16",
            "name" => "Grado baume (luz de los EUA)",
            "description" => "Uncodead de denscodead relativa para líqucodeos más ligeros que el agua.",
            "simbol" => "°Bé (US light)",
        ]);
        Unit::create([
            "code" => "J17",
            "name" => "Grado balling",
            "description" => "Uncodead de denscodead como medcodea del contencodeo de azúcar, especialmente de mosto de cerveza. Nombrado en honor de Karl Balling.",
            "simbol" => "°Balling",
        ]);
        Unit::create([
            "code" => "J18",
            "name" => "Grado brix",
            "description" => "Uncodead de proporcion utilizada para medir la proporcion de masa de azúcar disuelta a agua de un líqucodeo. Nombrado en honor de Adolf Brix",
            "simbol" => "°Bx",
        ]);
        Unit::create([
            "code" => "J19",
            "name" => "Grado fahrenheit hora pie cuadrado por uncodead térmica británica (termoquímico).",
            "simbol" => "°F·h·ft²/Btuth",
        ]);
        Unit::create([
            "code" => "J2",
            "name" => "Joule por kilogramo",
            "simbol" => "J/kg",
        ]);
        Unit::create([
            "code" => "J20",
            "name" => "Grado fahrenheit por kelvin",
            "simbol" => "°F/K",
        ]);
        Unit::create([
            "code" => "J21",
            "name" => "Grado fahrenheit por bar",
            "simbol" => "°F/bar",
        ]);
        Unit::create([
            "code" => "J22",
            "name" => "Grado fahrenheit hora pie cuadrado por uncodead térmica británica (tabla internacional).",
            "simbol" => "°F·h·ft²/BtuIT",
        ]);
        Unit::create([
            "code" => "J23",
            "name" => "Grado fahrenheit por hora",
            "simbol" => "°F/h",
        ]);
        Unit::create([
            "code" => "J24",
            "name" => "Grado fahrenheit por minuto",
            "simbol" => "°F/min",
        ]);
        Unit::create([
            "code" => "J25",
            "name" => "Grado fahrenheit por segundo",
            "simbol" => "°F/s",
        ]);
        Unit::create([
            "code" => "J26",
            "name" => "Reciproccodead grado fahrenheit",
            "simbol" => "1/°F",
        ]);
        Unit::create([
            "code" => "J27",
            "name" => "Grado oechsle",
            "description" => "Uncodead de denscodead como medcodea del contencodeo de azúcar de mosto, el licor no fermentado del que se elabora el vino. Nombrado en honor de Ferdinand Oechsle.",
            "simbol" => "°Oechsle",
        ]);
        Unit::create([
            "code" => "J28",
            "name" => "Grado rankine por hora",
            "simbol" => "°R/h",
        ]);
        Unit::create([
            "code" => "J29",
            "name" => "Grado rankine por minuto",
            "simbol" => "°R/min",
        ]);
        Unit::create([
            "code" => "J30",
            "name" => "Grado rankine por segundo",
            "simbol" => "°R/s",
        ]);
        Unit::create([
            "code" => "J31",
            "name" => "Grado twaddel.",
            "description" => "Uncodead de denscodead para líqucodeos que son más pesados que el agua. 1 grado Twaddle representa una diferencia en gravedad específica de 0,005.",
            "simbol" => "°Tw",
        ]);
        Unit::create([
            "code" => "J32",
            "name" => "Micropoise",
            "simbol" => "µP",
        ]);
        Unit::create([
            "code" => "J33",
            "name" => "Microgramo por kilogramo",
            "simbol" => "µg/kg",
        ]);
        Unit::create([
            "code" => "J34",
            "name" => "Microgramo por metro cúbico kelvin",
            "simbol" => "(µg/m³)/K",
        ]);
        Unit::create([
            "code" => "J35",
            "name" => "Microgramo por metro cúbico bar",
            "simbol" => "(µg/m³)/bar",
        ]);
        Unit::create([
            "code" => "J36",
            "name" => "Microlitro por litro",
            "simbol" => "µl/l",
        ]);
        Unit::create([
            "code" => "J38",
            "name" => "Baud",
            "description" => "Es Uncodead de medcodea utilizada en telecomunicaciones, que representa el número de símbolos por segundo en un medio de transmisión digital.1 Cada símbolo puede comprender 1 o más bits, dependiendo del esquema de modulación.",
            "simbol" => "Bd",
        ]);
        Unit::create([
            "code" => "J39",
            "name" => "Uncodead térmica británica (significado)",
            "simbol" => "Btu",
        ]);
        Unit::create([
            "code" => "J40",
            "name" => "Uncodead térmica británica (tabla internacional) pie por hora pie cuadrado grado fahrenheit.",
            "simbol" => "BtuIT·ft/(h·ft²·°F)",
        ]);
        Unit::create([
            "code" => "J41",
            "name" => "Uncodead térmica británica (tabla internacional) pulgada por hora pie cuadrado grado fahrenheit.",
            "simbol" => "BtuIT·in/(h·ft²·°F)",
        ]);
        Unit::create([
            "code" => "J42",
            "name" => "Uncodead térmica británica (tabla internacional) pulgada por segundo pie cuadrado grado fahrenheit.",
            "simbol" => "BtuIT·in/(s·ft²·°F)",
        ]);
        Unit::create([
            "code" => "J43",
            "name" => "Uncodead térmica británica (tabla internacional) por libra grado fahrenheit",
            "simbol" => "BtuIT/(lb·°F)",
        ]);
        Unit::create([
            "code" => "J44",
            "name" => "Uncodead térmica británica (tabla internacional) por minuto",
            "simbol" => "BtuIT/min",
        ]);
        Unit::create([
            "code" => "J45",
            "name" => "Uncodead térmica británica (tabla internacional) por segundo",
            "simbol" => "BtuIT/s",
        ]);
        Unit::create([
            "code" => "J46",
            "name" => "Uncodead térmica británica (termoquímico) pie por hora pie cuadrado grado fahrenheit.",
            "simbol" => "Btuth·ft/(h·ft²·°F)",
        ]);
        Unit::create([
            "code" => "J47",
            "name" => "Uncodead térmica británica (termoquímica) por hora",
            "simbol" => "Btuth/h",
        ]);
        Unit::create([
            "code" => "J48",
            "name" => "Uncodead térmica británica (termoquímico) pulgada por hora pie cuadrado grado fahrenheit.",
            "simbol" => "Btuth·in/(h·ft²·°F)",
        ]);
        Unit::create([
            "code" => "J49",
            "name" => "Uncodead térmica británica (termoquímico) pulgada por segundo pie cuadrado grado fahrenheit.",
            "simbol" => "Btuth·in/(s·ft²·°F)",
        ]);
        Unit::create([
            "code" => "J50",
            "name" => "Uncodead térmica británica (termoquímico) por libra grado fahrenheit",
            "simbol" => "Btuth/(lb·°F)",
        ]);
        Unit::create([
            "code" => "J51",
            "name" => "Uncodead térmica británica (termoquímica) por minuto",
            "simbol" => "Btuth/min",
        ]);
        Unit::create([
            "code" => "J52",
            "name" => "Uncodead térmica británica (termoquímica) por segundo",
            "simbol" => "Btuth/s",
        ]);
        Unit::create([
            "code" => "J53",
            "name" => "Culombio metro cuadrado por kilogramo",
            "simbol" => "C·m²/kg",
        ]);
        Unit::create([
            "code" => "J54",
            "name" => "Megabaud",
            "description" => "Uncodead de veloccodead de transmisión de señal igual a 106 (1000000) eventos de señalización por segundo.",
            "simbol" => "MBd",
        ]);
        Unit::create([
            "code" => "J55",
            "name" => "Watt segundo",
            "simbol" => "W·s",
        ]);
        Unit::create([
            "code" => "J56",
            "name" => "Bar por bar",
            "simbol" => "bar/bar",
        ]);
        Unit::create([
            "code" => "J57",
            "name" => "Barril (uk petróleo)",
            "description" => "Es el nombre de varias uncodeades de volumen usadas en el Reino Uncodeo y en los Estados Uncodeos.",
            "simbol" => "bbl (UK liq.)",
        ]);
        Unit::create([
            "code" => "J58",
            "name" => "Barril (petróleo UK) por minuto",
            "simbol" => "bbl (UK liq.)/min",
        ]);
        Unit::create([
            "code" => "J59",
            "name" => "Barril (petróleo UK) por día",
            "simbol" => "bbl (UK liq.)/d",
        ]);
        Unit::create([
            "code" => "J60",
            "name" => "Barril (petróleo UK) por hora",
            "simbol" => "bbl (UK liq.)/h",
        ]);
        Unit::create([
            "code" => "J61",
            "name" => "Barril (petróleo UK) por segundo",
            "simbol" => "bbl (UK liq.)/s",
        ]);
        Unit::create([
            "code" => "J62",
            "name" => "Barril (petróleo estados uncodeos) por hora",
            "simbol" => "bbl (US)/h",
        ]);
        Unit::create([
            "code" => "J63",
            "name" => "Barril (petróleo estados uncodeos) por segundo",
            "simbol" => "bbl (US)/s",
        ]);
        Unit::create([
            "code" => "J64",
            "name" => "Bushel (UK) por día ",
            "simbol" => "bu (UK)/d",
        ]);
        Unit::create([
            "code" => "J65",
            "name" => "Bushel (UK) por hora",
            "simbol" => "bu (UK)/h",
        ]);
        Unit::create([
            "code" => "J66",
            "name" => "Bushel (UK) por minuto",
            "simbol" => "bu (UK)/min",
        ]);
        Unit::create([
            "code" => "J67",
            "name" => "Bushel (UK) por segundo",
            "simbol" => "bu (UK)/s",
        ]);
        Unit::create([
            "code" => "J68",
            "name" => "Bushel (seco,estados uncodeos) por día",
            "simbol" => "bu (US dry)/d",
        ]);
        Unit::create([
            "code" => "J69",
            "name" => "Bushel (seco,estados uncodeos) por hora",
            "simbol" => "bu (US dry)/h",
        ]);
        Unit::create([
            "code" => "J70",
            "name" => "Bushel (seco,estados uncodeos) por minuto",
            "simbol" => "bu (US dry)/min",
        ]);
        Unit::create([
            "code" => "J71",
            "name" => "Bushel (seco,estados uncodeos) por segundo",
            "simbol" => "bu (US dry)/s",
        ]);
        Unit::create([
            "code" => "J72",
            "name" => "Centinewton metro",
            "simbol" => "cN·m",
        ]);
        Unit::create([
            "code" => "J73",
            "name" => "Centipoise por kelvin",
            "simbol" => "cP/K",
        ]);
        Unit::create([
            "code" => "J74",
            "name" => "Centipoise por bar",
            "simbol" => "cP/bar",
        ]);
        Unit::create([
            "code" => "J75",
            "name" => "Caloría",
            "description" => "Uncodead de energía térmica, de símbolo cal, que equivale a la cantcodead de calor necesaria para elevar 1 grado centígrado la temperatura de 1 gramo de agua.",
            "simbol" => "cal",
        ]);
        Unit::create([
            "code" => "J76",
            "name" => "Caloría (tabla internacional) por gramo gadro celsius",
            "simbol" => "calIT/(g·°C)",
        ]);
        Unit::create([
            "code" => "J78",
            "name" => "Caloría (termoquímica) por centímetro segundo grado celsius",
            "simbol" => "calth/(cm·s·°C)",
        ]);
        Unit::create([
            "code" => "J79",
            "name" => "Caloría (termoquímico) por gramo gadro celsius",
            "simbol" => "calth/(g·°C)",
        ]);
        Unit::create([
            "code" => "J81",
            "name" => "Caloría (termoquímica) por minuto",
            "simbol" => "calth/min",
        ]);
        Unit::create([
            "code" => "J82",
            "name" => "Caloría (termoquímica) por segundo",
            "simbol" => "calth/s",
        ]);
        Unit::create([
            "code" => "J83",
            "name" => "Clo",
            "description" => "Clo es una uncodead de medcodea empleada para el índice de indumento.",
            "simbol" => "clo",
        ]);
        Unit::create([
            "code" => "J84",
            "name" => "Centímetro por segundo kelvin",
            "simbol" => "(cm/s)/K",
        ]);
        Unit::create([
            "code" => "J85",
            "name" => "Centímetro por segundo bar",
            "simbol" => "(cm/s)/bar",
        ]);
        Unit::create([
            "code" => "J87",
            "name" => "Centímetro cúbico por metro cúbico",
            "simbol" => "cm³/m³",
        ]);
        Unit::create([
            "code" => "J89",
            "name" => "Centímetro de mercurio",
            "simbol" => "Cm Hg",
        ]);
        Unit::create([
            "code" => "J90",
            "name" => "Decímetro cúbico por día",
            "simbol" => "dm³/d",
        ]);
        Unit::create([
            "code" => "J91",
            "name" => "Decímetro cúbico por metro cúbico",
            "simbol" => "dm³/m³",
        ]);
        Unit::create([
            "code" => "J92",
            "name" => "Decímetro cúbico por minuto",
            "simbol" => "dm³/min",
        ]);
        Unit::create([
            "code" => "J93",
            "name" => "Decímetro cúbico por segundo",
            "simbol" => "dm³/s",
        ]);
        Unit::create([
            "code" => "J94",
            "name" => "Dina centímetro",
            "simbol" => "Dyn · cm",
        ]);
        Unit::create([
            "code" => "J95",
            "name" => "Onza (flucodeo, UK) por día",
            "simbol" => "fl oz (UK)/d",
        ]);
        Unit::create([
            "code" => "J96",
            "name" => "Onza (flucodeo, UK) por hora",
            "simbol" => "fl oz (UK)/h",
        ]);
        Unit::create([
            "code" => "J97",
            "name" => "Onza (flucodeo, UK) por minuto",
            "simbol" => "fl oz (UK)/min",
        ]);
        Unit::create([
            "code" => "J98",
            "name" => "Onza (flucodeo, UK) por segundo",
            "simbol" => "fl oz (UK)/s",
        ]);
        Unit::create([
            "code" => "J99",
            "name" => "Onza (flucodeo, estados uncodeos) por día",
            "simbol" => "fl oz (US)/d",
        ]);
        Unit::create([
            "code" => "JB",
            "name" => "Jumbo",
        ]);
        Unit::create([
            "code" => "JE",
            "name" => "Joule por kelvin",
            "description" => "Es el aumento de entropía de un sistema que recibe una cantcodead de calor de 1 joule, a la temperatura termodinámica constante de 1 kelvin, siempre que en el sistema no tenga lugar ninguna transformación irreversible.",
            "simbol" => "J/K",
        ]);
        Unit::create([
            "code" => "JK",
            "name" => "Megajoule por kilogramo",
            "simbol" => "MJ/kg",
        ]);
        Unit::create([
            "code" => "JM",
            "name" => "Megajoule por metro cúbico",
            "simbol" => "MJ/m³",
        ]);
        Unit::create([
            "code" => "JNT",
            "name" => "Junta de tubería",
            "description" => "Un recuento del número de juntas de la tubería.",
        ]);
        Unit::create([
            "code" => "Jo",
            "name" => "Articulación",
        ]);
        Unit::create([
            "code" => "JOU",
            "name" => "Joule",
            "description" => "Es el trabajo produccodeo por una fuerza de 1 newton, cuyo punto de aplicación se desplaza 1 metro en la dirección de la fuerza. ",
            "simbol" => "J",
        ]);
        Unit::create([
            "code" => "JPS",
            "name" => "Cien metros",
            "description" => "Uncodead de conteo que define el número de longitudes de 100 metros.",
        ]);
        Unit::create([
            "code" => "JWL",
            "name" => "Número de joyas",
            "description" => "Uncodead de cuenta que define el número de joyas (joya: piedra preciosa).",
        ]);
        Unit::create([
            "code" => "K1",
            "name" => "Demanda de kilowatt",
            "description" => "Uncodead de medcodea que define la carga de potencia medcodea a intervalos predeterminados.",
        ]);
        Unit::create([
            "code" => "K10",
            "name" => "Onza (flucodeo, estados uncodeos) por hora",
            "simbol" => "fl oz (US)/h",
        ]);
        Unit::create([
            "code" => "K11",
            "name" => "Onza (flucodeo, estados uncodeos) por minuto",
            "simbol" => "fl oz (US)/min",
        ]);
        Unit::create([
            "code" => "K12",
            "name" => "Onza (flucodeo, estados uncodeos) por segundo",
            "simbol" => "fl oz (US)/s",
        ]);
        Unit::create([
            "code" => "K13",
            "name" => "Pie por grado fahrenheit",
            "simbol" => "ft/°F",
        ]);
        Unit::create([
            "code" => "K14",
            "name" => "Pie por hora",
            "simbol" => "ft/h",
        ]);
        Unit::create([
            "code" => "K15",
            "name" => "Pie libra-fuerza por hora",
            "simbol" => "ft·lbf/h",
        ]);
        Unit::create([
            "code" => "K16",
            "name" => "Pie libra-fuerza por minuto",
            "simbol" => "ft·lbf/min",
        ]);
        Unit::create([
            "code" => "K17",
            "name" => "Pie por psi (libra por pulgada cuadrada)",
            "simbol" => "ft/psi",
        ]);
        Unit::create([
            "code" => "K18",
            "name" => "Pie por segundo grado fahrenheit",
            "simbol" => "(ft/s)/°F",
        ]);
        Unit::create([
            "code" => "K19",
            "name" => "Pie por segundo psi (libra por pulgada cuadrada)",
            "simbol" => "(ft/s)/psi",
        ]);
        Unit::create([
            "code" => "K2",
            "name" => "Kilovoltios amperios demanda reactiva",
            "description" => "Uncodead de medcodea que define la demanda de potencia reactiva igual a un kilovoltioio de potencia reactiva.",
        ]);
        Unit::create([
            "code" => "K20",
            "name" => "Reciproccodead del pie cuadrado",
            "simbol" => "1/ft³",
        ]);
        Unit::create([
            "code" => "K21",
            "name" => "Pie cúbico por grado fahrenheit",
            "simbol" => "ft³/°F",
        ]);
        Unit::create([
            "code" => "K22",
            "name" => "Pie cúbico por día",
            "simbol" => "ft³/d",
        ]);
        Unit::create([
            "code" => "K23",
            "name" => "Pie cúbico por psi (libra por pulgada cuadrada)",
            "simbol" => "ft³/psi",
        ]);
        Unit::create([
            "code" => "K24",
            "name" => "Pie de agua",
            "simbol" => "Ft H $ ₂ $ O",
        ]);
        Unit::create([
            "code" => "K25",
            "name" => "Pie de mercurio",
            "simbol" => "Ft Hg",
        ]);
        Unit::create([
            "code" => "K26",
            "name" => "Galón (UK) por día",
            "simbol" => "gal (UK)/d",
        ]);
        Unit::create([
            "code" => "K27",
            "name" => "Galón (UK) por hora",
            "simbol" => "gal (UK)/h",
        ]);
        Unit::create([
            "code" => "K28",
            "name" => "Galón (UK) por segundo",
            "simbol" => "gal (UK)/s",
        ]);
        Unit::create([
            "code" => "K3",
            "name" => "Kilovoltio amperio hora reactivo",
            "description" => "Uncodead de medcodea que define la energía reactiva acumulada igual a un kilovoltioio de potencia reactiva por hora.",
            "simbol" => "kvar·h",
        ]);
        Unit::create([
            "code" => "K30",
            "name" => "Galón (líqucodeo, EUA) por segundo",
            "simbol" => "gal (US liq.)/s",
        ]);
        Unit::create([
            "code" => "K31",
            "name" => "Gramo-fuerza por centímetro cuadrado",
            "simbol" => "gf/cm²",
        ]);
        Unit::create([
            "code" => "K32",
            "name" => "Gill (UK) por día",
            "description" => "Gill es una uncodead de volumen inglesa en el sistema imperial y en los Estados Uncodeos. La versión imperial usada en el UK es de 5 onzas líqucodeas, y es equivalente a 142,0653125 ml; mientras que en los EUA es de 4 onzas líqucodeas, y es equivalente a 118,29411825 ml.",
            "simbol" => "gi (UK)/d",
        ]);
        Unit::create([
            "code" => "K33",
            "name" => "Gill (UK) por hora",
            "simbol" => "gi (UK)/h",
        ]);
        Unit::create([
            "code" => "K34",
            "name" => "Gill (UK) por minuto",
            "simbol" => "gi (UK)/min",
        ]);
        Unit::create([
            "code" => "K35",
            "name" => "Gill (UK) por segundo",
            "simbol" => "gi (UK)/s",
        ]);
        Unit::create([
            "code" => "K36",
            "name" => "Gill (estados uncodeos) por día",
            "simbol" => "gi (US)/d",
        ]);
        Unit::create([
            "code" => "K37",
            "name" => "Gill (estados uncodeos) por hora",
            "simbol" => "gi (US)/h",
        ]);
        Unit::create([
            "code" => "K38",
            "name" => "Gill (estados uncodeos) por minuto",
            "simbol" => "gi (US)/min",
        ]);
        Unit::create([
            "code" => "K39",
            "name" => "Gill (estados uncodeos) por segundo",
            "simbol" => "gi (US)/s",
        ]);
        Unit::create([
            "code" => "K40",
            "name" => "Aceleración estándar de la caída libre",
            "description" => "Es la aceleración nominal de la gravedad de un objeto en un vacío cerca de la superficie de la Tierra.",
            "simbol" => "gn",
        ]);
        Unit::create([
            "code" => "K41",
            "name" => "Grano por galón (EUA)",
            "simbol" => "gr/gal (US)",
        ]);
        Unit::create([
            "code" => "K42",
            "name" => "Caballo de fuerza de caldera ",
            "description" => "Es la cantcodead de energía requercodea para producir 34,5 libras (15,65 kg) de vapor por hora a presión y temperatura 0 psig (0 bar) y 212 o F (100 o C) - con agua de alimentación a presión 0 psig y la temperatura 212 o F.",
            "simbol" => "boiler hp",
        ]);
        Unit::create([
            "code" => "K43",
            "name" => "Caballo de fuerza (eléctrico)",
            "description" => "Es una uncodead de medcodea de potencia (la veloccodead a la que el trabajo se realiza).",
            "simbol" => "electric hp",
        ]);
        Unit::create([
            "code" => "K45",
            "name" => "Pulgada por grado fahrenheit",
            "simbol" => "in/°F",
        ]);
        Unit::create([
            "code" => "K46",
            "name" => "Pulgada por psi (libra por pulgada cuadrada)",
            "simbol" => "in/psi",
        ]);
        Unit::create([
            "code" => "K47",
            "name" => "Pulgada por segundo grado fahrenheit",
            "simbol" => "(in/s)/°F",
        ]);
        Unit::create([
            "code" => "K48",
            "name" => "Pulgada por segundo psi (libra por pulgada cuadrada)",
            "simbol" => "(in/s)/psi",
        ]);
        Unit::create([
            "code" => "K49",
            "name" => "Reciproccodead de la pulgada cuadrada",
            "simbol" => "1/in³",
        ]);
        Unit::create([
            "code" => "K5",
            "name" => "Kilovoltios amperios (reactivos)",
            "description" => "Utilice kilovar (código común KVR)",
            "simbol" => "Kvar",
        ]);
        Unit::create([
            "code" => "K50",
            "name" => "Kilobaud",
            "description" => "Uncodead de veloccodead de transmisión de señal igual a 10³ (1000) eventos de señalización por segundo.",
            "simbol" => "kBd",
        ]);
        Unit::create([
            "code" => "K51",
            "name" => "Kilocaloría (significado)",
            "simbol" => "kcal",
        ]);
        Unit::create([
            "code" => "K52",
            "name" => "Kilocaloría (tabla internacional) por hora metro grado celsius",
            "simbol" => "kcal/(m·h·°C)",
        ]);
        Unit::create([
            "code" => "K53",
            "name" => "Kilocaloría (termoquímico)",
            "simbol" => "kcalth",
        ]);
        Unit::create([
            "code" => "K54",
            "name" => "Kilocaloría (termoquímica) por minuto",
            "simbol" => "kcalth/min",
        ]);
        Unit::create([
            "code" => "K55",
            "name" => "Kilocaloría (termoquímica) por segundo",
            "simbol" => "kcalth/s",
        ]);
        Unit::create([
            "code" => "K58",
            "name" => "KiloMol por hora",
            "simbol" => "kmol/h",
        ]);
        Unit::create([
            "code" => "K59",
            "name" => "KiloMol por metro cúbico kelvin",
            "simbol" => "(kmol/m³)/K",
        ]);
        Unit::create([
            "code" => "K6",
            "name" => "Kilolitro",
            "simbol" => "kl",
        ]);
        Unit::create([
            "code" => "K60",
            "name" => "KiloMol por metro cúbico bar",
            "simbol" => "(kmol/m³)/bar",
        ]);
        Unit::create([
            "code" => "K61",
            "name" => "KiloMol por minuto",
            "simbol" => "kmol/min",
        ]);
        Unit::create([
            "code" => "K62",
            "name" => "Litro por litro",
            "simbol" => "l/l",
        ]);
        Unit::create([
            "code" => "K63",
            "name" => "Reciproccodead del litro",
            "simbol" => "1/l",
        ]);
        Unit::create([
            "code" => "K64",
            "name" => "Libra (avoirdupois) por grado fahrenheit",
            "simbol" => "lb/°F",
        ]);
        Unit::create([
            "code" => "K65",
            "name" => "Libra (avoirdupois) pie cuadrado",
            "simbol" => "lb·ft²",
        ]);
        Unit::create([
            "code" => "K66",
            "name" => "Libra (avoirdupois) por día",
            "simbol" => "lb/d",
        ]);
        Unit::create([
            "code" => "K67",
            "name" => "Libra por pie hora",
            "simbol" => "lb/(ft·h)",
        ]);
        Unit::create([
            "code" => "K68",
            "name" => "Libra por pie segundo",
            "simbol" => "lb/(ft·s)",
        ]);
        Unit::create([
            "code" => "K69",
            "name" => "Libra (avoirdupois) por pie cúbico grado fahrenheit",
            "simbol" => "(lb/ft³)/°F",
        ]);
        Unit::create([
            "code" => "K70",
            "name" => "Libra (avoirdupois) por pie cúbico psi",
            "simbol" => "(lb/ft³)/psi",
        ]);
        Unit::create([
            "code" => "K71",
            "name" => "Libra (avoirdupois) por galón (UK)",
            "simbol" => "lb/gal (UK)",
        ]);
        Unit::create([
            "code" => "K73",
            "name" => "Libra (avoirdupois) por hora grados fahrenheit",
            "simbol" => "(lb/h)/°F",
        ]);
        Unit::create([
            "code" => "K74",
            "name" => "Libra (avoirdupois) por hora libra-fuerza por pulgada cuadrada",
            "simbol" => "(lb/h)/psi",
        ]);
        Unit::create([
            "code" => "K75",
            "name" => "Libra (avoirdupois) por pulgada cúbica grado fahrenheit",
            "simbol" => "(lb/in³)/°F",
        ]);
        Unit::create([
            "code" => "K76",
            "name" => "Libra (avoirdupois) por pulgada cúbica psi",
            "simbol" => "(lb/in³)/psi",
        ]);
        Unit::create([
            "code" => "K77",
            "name" => "Libra (avoirdupois) por psi",
            "simbol" => "lb/psi",
        ]);
        Unit::create([
            "code" => "K78",
            "name" => "Libra (avoirdupois) por minuto",
            "simbol" => "lb/min",
        ]);
        Unit::create([
            "code" => "K79",
            "name" => "Libra (avoirdupois) por minuto grados fahrenheit",
            "simbol" => "lb/(min·°F)",
        ]);
        Unit::create([
            "code" => "K80",
            "name" => "Libra (avoirdupois) por minuto libra-fuerza por pulgada cuadrada",
            "simbol" => "(lb/min)/psi",
        ]);
        Unit::create([
            "code" => "K81",
            "name" => "Libra (avoirdupois) por segundo",
            "simbol" => "lb/s",
        ]);
        Unit::create([
            "code" => "K82",
            "name" => "Libra (avoirdupois)por segundo grados fahrenheit",
            "simbol" => "(lb/s)/°F",
        ]);
        Unit::create([
            "code" => "K83",
            "name" => "Libra (avoirdupois) por segundo libra-fuerza por pulgada cuadrada",
            "simbol" => "(lb/s)/psi",
        ]);
        Unit::create([
            "code" => "K84",
            "name" => "Libra por yarda cúbica ",
            "simbol" => "lb/yd³",
        ]);
        Unit::create([
            "code" => "K85",
            "name" => "Libra-fuerza por pie cuadrado",
            "simbol" => "lbf/ft²",
        ]);
        Unit::create([
            "code" => "K86",
            "name" => "Libra-fuerza por pulgada cuadrada grados fahrenheit",
            "simbol" => "psi/°F",
        ]);
        Unit::create([
            "code" => "K87",
            "name" => "Libra-fuerza por pulgada cuadrada pulgada cúbica por segundo",
            "simbol" => "psi·in³/s",
        ]);
        Unit::create([
            "code" => "K88",
            "name" => "Libra-fuerza por pulgada cuadrada litro por segundo",
            "simbol" => "psi·l/s",
        ]);
        Unit::create([
            "code" => "K89",
            "name" => "Libra-fuerza por pulgada cuadrada metro cúbico por segundo",
            "simbol" => "psi·m³/s",
        ]);
        Unit::create([
            "code" => "K90",
            "name" => "Libra-fuerza por pulgada cuadrada yarda cúbica por segundo",
            "simbol" => "psi·yd³/s",
        ]);
        Unit::create([
            "code" => "K91",
            "name" => "Libra-fuerza segundo por pie cuadrado",
            "simbol" => "lbf·s/ft²",
        ]);
        Unit::create([
            "code" => "K92",
            "name" => "Libra-fuerza segundo por pulgada cuadrada",
            "simbol" => "lbf·s/in²",
        ]);
        Unit::create([
            "code" => "K93",
            "name" => "Reciproccodead psi",
            "simbol" => "1/psi",
        ]);
        Unit::create([
            "code" => "K94",
            "name" => "Cuarto (líqucodeo, UK) por día",
            "simbol" => "qt (UK liq.)/d",
        ]);
        Unit::create([
            "code" => "K95",
            "name" => "Cuarto (líqucodeo, UK) por hora",
            "simbol" => "qt (UK liq.)/h",
        ]);
        Unit::create([
            "code" => "K96",
            "name" => "Cuarto (líqucodeo, UK) por minuto",
            "simbol" => "qt (UK liq.)/min",
        ]);
        Unit::create([
            "code" => "K97",
            "name" => "Cuarto (líqucodeo, UK) por segundo",
            "simbol" => "qt (UK liq.)/s",
        ]);
        Unit::create([
            "code" => "K98",
            "name" => "Cuarto (líqucodeo, estados uncodeos) por día",
            "simbol" => "qt (US liq.)/d",
        ]);
        Unit::create([
            "code" => "K99",
            "name" => "Cuarto (líqucodeo, estados uncodeos) por hora",
            "simbol" => "qt (US liq.)/h",
        ]);
        Unit::create([
            "code" => "KA",
            "name" => "Pastel",
            "description" => "Uncodead de conteo que define el número de pasteles (torta: objeto en forma de una masa plana y compacta).",
        ]);
        Unit::create([
            "code" => "KAT",
            "name" => "Katal",
            "description" => " Una uncodead de activcodead catalítica que define la activcodead catalítica de las enzimas y otros catalizadores.",
            "simbol" => "kat",
        ]);
        Unit::create([
            "code" => "KB",
            "name" => "Kilocaracter",
            "description" => "Uncodead de información igual a 10³ (1000) caracteres.",
        ]);
        Unit::create([
            "code" => "KBA",
            "name" => "Kilobar",
            "simbol" => "kbar",
        ]);
        Unit::create([
            "code" => "KCC",
            "name" => "Kilogramo de cloruro de colina",
            "description" => "Uncodead de masa igual a mil gramos de cloruro de colina.",
            "simbol" => "kg C₅ H₁₄ClNO",
        ]);
        Unit::create([
            "code" => "KD",
            "name" => "Kilogram decimal",
        ]);
        Unit::create([
            "code" => "KDW",
            "name" => "Kilogramo de peso neto drenado",
            "description" => "Uncodead de masa que define el número neto de kilogramos de un producto, sin tener en cuenta el contencodeo líqucodeo del producto.",
            "simbol" => "kg/net eda",
        ]);
        Unit::create([
            "code" => "KEL",
            "name" => "Kelvin",
            "description" => "Uncodead de temperatura termodinámica, es la fracción 1/273,16 de la temperatura termodinámica del punto triple del agua. ",
            "simbol" => "K",
        ]);
        Unit::create([
            "code" => "KF",
            "name" => "Kilopacket",
        ]);
        Unit::create([
            "code" => "KGM",
            "name" => "Kilogramo",
            "description" => "Una uncodead de masa igual a mil gramos.",
            "simbol" => "kg",
        ]);
        Unit::create([
            "code" => "KGS",
            "name" => "Kilogramo por segundo",
            "simbol" => "kg/s",
        ]);
        Unit::create([
            "code" => "KHY",
            "name" => "Kilogramo de peróxcodeo de hcoderógeno",
            "description" => "Uncodead de masa igual a mil gramos de peróxcodeo de hcoderógeno.",
            "simbol" => "kg H₂O₂",
        ]);
        Unit::create([
            "code" => "KHZ",
            "name" => "Kilohertz",
            "description" => "Medcodea de frecuencia que es igual a 1000 hertz.",
            "simbol" => "kHz",
        ]);
        Unit::create([
            "code" => "KI",
            "name" => "Kilogramo por milímetro de ancho",
        ]);
        Unit::create([
            "code" => "KIC",
            "name" => "Kilogramo, incluyendo el contenedor",
            "description" => "Uncodead de masa que define el número de kilogramos de un producto, inclucodeo su contenedor.",
        ]);
        Unit::create([
            "code" => "KIP",
            "name" => "Kilogramo, incluyendo el empaquetado interno",
            "description" => "Uncodead de masa que define el número de kilogramos de un producto, incluyendo sus materiales de embalaje internos.",
        ]);
        Unit::create([
            "code" => "KJ",
            "name" => "Kilosegmento",
            "description" => "Uncodead de información igual a 10³ (1000) segmentos.",
        ]);
        Unit::create([
            "code" => "KJO",
            "name" => "Kilojoule",
            "simbol" => "kJ",
        ]);
        Unit::create([
            "code" => "KL",
            "name" => "Kilogramo por metro",
            "simbol" => "kg/m",
        ]);
        Unit::create([
            "code" => "KLK",
            "name" => "Porcentaje de material seco láctico",
            "description" => "Uncodead de proporción que define el porcentaje de material láctico seco en un producto.",
        ]);
        Unit::create([
            "code" => "KLX",
            "name" => "Kilolux",
            "description" => "Una uncodead de iluminancia igual a mil lux.",
            "simbol" => "klx",
        ]);
        Unit::create([
            "code" => "KMA",
            "name" => "Kilogramo de metilamina",
            "description" => "Uncodead de masa igual a mil gramos de metilamina.",
            "simbol" => "kg met.am.",
        ]);
        Unit::create([
            "code" => "KMH",
            "name" => "Kilómetro por hora",
            "simbol" => "km/h",
        ]);
        Unit::create([
            "code" => "KMK",
            "name" => "Kilómetro cuadrado",
            "description" => "Es la uncodead de superficie de área que se corresponde con un cuadrado de un kilómetro de lado.",
            "simbol" => "km²",
        ]);
        Unit::create([
            "code" => "KMQ",
            "name" => "Kilogramo por metro cúbico",
            "description" => "Uncodead de peso expresada en kilogramos de una sustancia que llena un volumen de un metro cúbico.",
            "simbol" => "kg/m³",
        ]);
        Unit::create([
            "code" => "KMT",
            "name" => "Kilómetro",
            "description" => "Es una uncodead de longitud. Es el tercer múltiplo del metro, equivalente a 1000 metros. Su símbolo es km y no acepta plural ni lleva punto final —excepto cuando se encuentra como último elemento de una frase u oración— por no tratarse de una abreviatura.",
            "simbol" => "km",
        ]);
        Unit::create([
            "code" => "KNI",
            "name" => "Kilogramo de nitrógeno",
            "description" => "Uncodead de masa igual a mil gramos de nitrógeno.",
            "simbol" => "kg N",
        ]);
        Unit::create([
            "code" => "KNM",
            "name" => "Kolonewton por metro cuadrado",
            "simbol" => "KN/m2",
        ]);
        Unit::create([
            "code" => "KNS",
            "name" => "Kilogram sustancia nombrada",
            "description" => "Uncodead de masa igual a un kilogramo de una sustancia llamada.",
        ]);
        Unit::create([
            "code" => "KNT",
            "name" => "Nudo",
            "description" => "El nudo es una medcodea de veloccodead utilizada tanto para navegación marítima como aérea, equivalente a 1852 m/hora. También se utiliza en meteorología para medir la veloccodead de los vientos.",
            "simbol" => "kn",
        ]);
        Unit::create([
            "code" => "KO",
            "name" => "Miliequivalentes de potasa cáustica por gramo de producto",
            "description" => "Uncodead de conteo que define el número de miligramos de hcoderóxcodeo de potasio por gramo de producto como una medcodea de la concentración de hcoderóxcodeo de potasio en el producto.",
        ]);
        Unit::create([
            "code" => "KPA",
            "name" => "Kilopascal",
            "simbol" => "kPa",
        ]);
        Unit::create([
            "code" => "KPH",
            "name" => "Kilogramo de hcoderóxcodeo de potasio (potasa cáustica)",
            "description" => "Uncodead de masa igual a mil gramos de hcoderóxcodeo de potasio (potasa cáustica).",
            "simbol" => "kg KOH",
        ]);
        Unit::create([
            "code" => "KPO",
            "name" => "Kilogramo de óxcodeo de potasio",
            "description" => "Uncodead de masa igual a mil gramos de óxcodeo de potasio.",
            "simbol" => "kg K₂O",
        ]);
        Unit::create([
            "code" => "KPP",
            "name" => "Kilogramo de pentóxcodeo de fósforo (anhídrcodeo fosfórico)",
            "description" => "Uncodead de masa igual a mil gramos de anhídrcodeo fosfórico de pentóxcodeo de fósforo.",
        ]);
        Unit::create([
            "code" => "KR",
            "name" => "Kiloroentgen",
            "simbol" => "kR",
        ]);
        Unit::create([
            "code" => "KS",
            "name" => "Mil libras por pulgada cuadrada",
        ]);
        Unit::create([
            "code" => "KSD",
            "name" => "Kilogramo de sustancia 90% seco",
            "description" => "Uncodead de masa igual a mil gramos de una sustancia llamada 90% seca.",
            "simbol" => "kg 90 % sdt",
        ]);
        Unit::create([
            "code" => "KSH",
            "name" => "Kilogramo de hcoderóxcodeo de sodio (sodio cáustica)",
            "description" => "Uncodead de masa igual a mil gramos de hcoderóxcodeo sódico (sosa cáustica).",
            "simbol" => "kg NaOH",
        ]);
        Unit::create([
            "code" => "KT",
            "name" => "Kit",
            "description" => "Uncodead de conteo que define el número de kits (kit: bañera, barril o cubo).",
        ]);
        Unit::create([
            "code" => "KTN",
            "name" => "Kilotonelada Métrica",
            "simbol" => "kt",
        ]);
        Unit::create([
            "code" => "KUR",
            "name" => "Kilogramo de uranio",
            "description" => "Uncodead de masa igual a mil gramos de uranio.",
            "simbol" => "kg U",
        ]);
        Unit::create([
            "code" => "KVA",
            "name" => "Kilovoltio - amperio",
            "simbol" => "kV·A",
        ]);
        Unit::create([
            "code" => "KVR",
            "name" => "Kilovar",
            "simbol" => "kvar",
        ]);
        Unit::create([
            "code" => "KVT",
            "name" => "Kilovoltio",
            "simbol" => "kV",
        ]);
        Unit::create([
            "code" => "KW",
            "name" => "Kilogramo por milímetro",
            "simbol" => "kg/mm",
        ]);
        Unit::create([
            "code" => "KWH",
            "name" => "Kilowatt hora",
            "simbol" => "kW·h",
        ]);
        Unit::create([
            "code" => "KWN",
            "name" => "Kilowatt hora por metro cúbico normalizado",
            "description" => "Kilowatt hora por metro cúbico normalizado (temperatura 0 ° C y presión 101325 milibares).",
        ]);
        Unit::create([
            "code" => "KWO",
            "name" => "Kilogramo de trióxcodeo de tungsteno",
            "description" => "A unit of mass equal to one thousand grams of tungsten trioxcodee.",
            "simbol" => "kg WO₃",
        ]);
        Unit::create([
            "code" => "KWS",
            "name" => "Kilowatt hora por metro cúbico estándar",
            "description" => "Kilowatt hora por metro cúbico normalizado (temperatura 15 ° C y presión 101325 milibares).",
        ]);
        Unit::create([
            "code" => "KWT",
            "name" => "Kilowatt",
            "simbol" => "kW",
        ]);
        Unit::create([
            "code" => "KX",
            "name" => "Mililitro por kilogramo",
            "simbol" => "ml/kg",
        ]);
        Unit::create([
            "code" => "L10",
            "name" => "Cuarto (líqucodeo, estados uncodeos) por minuto",
            "simbol" => "qt (US liq.)/min",
        ]);
        Unit::create([
            "code" => "L11",
            "name" => "Cuarto (líqucodeo, estados uncodeos) por segundo",
            "simbol" => "qt (US liq.)/s",
        ]);
        Unit::create([
            "code" => "L12",
            "name" => "Metro por segundo kelvin",
            "simbol" => "(m/s)/K",
        ]);
        Unit::create([
            "code" => "L13",
            "name" => "Metro por segundo bar",
            "simbol" => "(m/s)/bar",
        ]);
        Unit::create([
            "code" => "L14",
            "name" => "Metro cuadrado hora grado celsius por kilocaloría (tabla internacional)",
            "simbol" => "m²·h·°C/kcal",
        ]);
        Unit::create([
            "code" => "L15",
            "name" => "Milipascal segundo por kelvin",
            "simbol" => "mPa·s/K",
        ]);
        Unit::create([
            "code" => "L16",
            "name" => "Milipascal segundo por bar",
            "simbol" => "mPa·s/bar",
        ]);
        Unit::create([
            "code" => "L17",
            "name" => "Miligramo por metro cúbico kelvin",
            "simbol" => "(mg/m³)/K",
        ]);
        Unit::create([
            "code" => "L18",
            "name" => "Miligramo por metro cúbico bar",
            "simbol" => "(mg/m³)/bar",
        ]);
        Unit::create([
            "code" => "L19",
            "name" => "Mililitro por litro",
            "simbol" => "ml/l",
        ]);
        Unit::create([
            "code" => "L2",
            "name" => "Litro por minuto",
            "simbol" => "l/min",
        ]);
        Unit::create([
            "code" => "L20",
            "name" => "Reciproccodead del milimetro cúbico",
            "simbol" => "1/mm³",
        ]);
        Unit::create([
            "code" => "L21",
            "name" => "Milimetro cúbico por metro cúbico",
            "simbol" => "mm³/m³",
        ]);
        Unit::create([
            "code" => "L23",
            "name" => "Mol por hora ",
            "simbol" => "mol/h",
        ]);
        Unit::create([
            "code" => "L24",
            "name" => "Mol por kilogramo kelvin",
            "simbol" => "(mol/kg)/K",
        ]);
        Unit::create([
            "code" => "L25",
            "name" => "Mol por kilogramo bar",
            "simbol" => "(mol/kg)/bar",
        ]);
        Unit::create([
            "code" => "L26",
            "name" => "Mol por litreo kelvin",
            "simbol" => "(mol/l)/K",
        ]);
        Unit::create([
            "code" => "L27",
            "name" => "Mol por litro bar",
            "simbol" => "(mol/l)/bar",
        ]);
        Unit::create([
            "code" => "L28",
            "name" => "Mol por metro cúbico kelvin",
            "simbol" => "(mol/m³)/K",
        ]);
        Unit::create([
            "code" => "L29",
            "name" => "Mol por metro cúbico bar",
            "simbol" => "(mol/m³)/bar",
        ]);
        Unit::create([
            "code" => "L30",
            "name" => "Mol por minuto",
            "simbol" => "mol/min",
        ]);
        Unit::create([
            "code" => "L31",
            "name" => "Milliroentgen aequivalent men",
            "simbol" => "mrem",
        ]);
        Unit::create([
            "code" => "L32",
            "name" => "Nanogramo por kilogramo",
            "simbol" => "ng/kg",
        ]);
        Unit::create([
            "code" => "L33",
            "name" => "Onza (avoirdupois) por día",
            "simbol" => "oz/d",
        ]);
        Unit::create([
            "code" => "L34",
            "name" => "Onza (avoirdupois) por hora",
            "simbol" => "oz/h",
        ]);
        Unit::create([
            "code" => "L35",
            "name" => "Onza (avoirdupois) por minuto",
            "simbol" => "oz/min",
        ]);
        Unit::create([
            "code" => "L36",
            "name" => "Onza (avoirdupois) por segundo",
            "simbol" => "oz/s",
        ]);
        Unit::create([
            "code" => "L37",
            "name" => "Onza (avoirdupois) por galón (UK)",
            "simbol" => "oz/gal (UK)",
        ]);
        Unit::create([
            "code" => "L38",
            "name" => "Onza (avoirdupois) por galón (EUA)",
            "simbol" => "oz/gal (US)",
        ]);
        Unit::create([
            "code" => "L39",
            "name" => "Onza (avoirdupois) por pulgada cúbica",
            "simbol" => "oz/in³",
        ]);
        Unit::create([
            "code" => "L40",
            "name" => "Onza fuerza",
            "simbol" => "ozf",
        ]);
        Unit::create([
            "code" => "L41",
            "name" => "Onza (avoirdupois) fuerza pulgada",
            "simbol" => "ozf·in",
        ]);
        Unit::create([
            "code" => "L42",
            "name" => "Picosiemens por metro",
            "simbol" => "pS/m",
        ]);
        Unit::create([
            "code" => "L43",
            "name" => "Peck (UK)",
            "description" => "Un peck es una uncodead tradicional de medcodea de volúmenes. Aunque puede ser utilizado para medir seco y líqucodeo, se utiliza generalmente para las materias secas. Es igual a 1/4 bushel, 2 galones, o 8 cuartos de galón.",
            "simbol" => "pk (UK)",
        ]);
        Unit::create([
            "code" => "L44",
            "name" => "Peck (UK) por día",
            "simbol" => "pk (UK)/d",
        ]);
        Unit::create([
            "code" => "L45",
            "name" => "Peck (UK) por hora",
            "simbol" => "pk (UK)/h",
        ]);
        Unit::create([
            "code" => "L46",
            "name" => "Peck (UK) por minuto",
            "simbol" => "pk (UK)/min",
        ]);
        Unit::create([
            "code" => "L47",
            "name" => "Peck (UK) por segundo",
            "simbol" => "pk (UK)/s",
        ]);
        Unit::create([
            "code" => "L48",
            "name" => "Peck (seco, estados uncodeos) por día",
            "simbol" => "pk (US dry)/d",
        ]);
        Unit::create([
            "code" => "L49",
            "name" => "Peck (seco, estados uncodeos) por hora",
            "simbol" => "pk (US dry)/h",
        ]);
        Unit::create([
            "code" => "L50",
            "name" => "Peck (seco, estados uncodeos) por minuto",
            "simbol" => "pk (US dry)/min",
        ]);
        Unit::create([
            "code" => "L51",
            "name" => "Peck (seco, estados uncodeos) por segundo",
            "simbol" => "pk (US dry)/s",
        ]);
        Unit::create([
            "code" => "L52",
            "name" => "Libra.fuerza por pulgada cuadrada por libra fuerza por pulgada cuadrada",
            "simbol" => "psi/psi",
        ]);
        Unit::create([
            "code" => "L53",
            "name" => "Pinta (UK) por día",
            "simbol" => "pt (UK)/d",
        ]);
        Unit::create([
            "code" => "L54",
            "name" => "Pinta (UK) por hora",
            "simbol" => "pt (UK)/h",
        ]);
        Unit::create([
            "code" => "L55",
            "name" => "Pinta (UK) por minuto",
            "simbol" => "pt (UK)/min",
        ]);
        Unit::create([
            "code" => "L56",
            "name" => "Pinta (UK) por segundo",
            "simbol" => "pt (UK)/s",
        ]);
        Unit::create([
            "code" => "L57",
            "name" => "Pinta (líqucodeo, estados uncodeos) por día",
            "simbol" => "pt (US liq.)/d",
        ]);
        Unit::create([
            "code" => "L58",
            "name" => "Pinta (líqucodeo, estados uncodeos) por hora",
            "simbol" => "pt (US liq.)/h",
        ]);
        Unit::create([
            "code" => "L59",
            "name" => "Pinta (líqucodeo, estados uncodeos) por minuto",
            "simbol" => "pt (US liq.)/min",
        ]);
        Unit::create([
            "code" => "L60",
            "name" => "Pinta (líqucodeo, estados uncodeos) por segundo",
            "simbol" => "pt (US liq.)/s",
        ]);
        Unit::create([
            "code" => "L61",
            "name" => "Pinta (US seco)",
            "description" => "Utilice pinta seca (código común PTD)",
            "simbol" => "Pt (US seco)",
        ]);
        Unit::create([
            "code" => "L62",
            "name" => "Cuarto de galón (seco de los EUA)",
            "description" => "Utilice cuarto seco (EUA) (código común QTD)",
            "simbol" => "Qt (US seco)",
        ]);
        Unit::create([
            "code" => "L63",
            "name" => "Slug por día",
            "simbol" => "slug/d",
        ]);
        Unit::create([
            "code" => "L64",
            "name" => "Slug por pie segundo",
            "simbol" => "slug/(ft·s)",
        ]);
        Unit::create([
            "code" => "L65",
            "name" => "Slug por pie cúbico",
            "simbol" => "slug/ft³",
        ]);
        Unit::create([
            "code" => "L66",
            "name" => "Slug por hora",
            "simbol" => "slug/h",
        ]);
        Unit::create([
            "code" => "L67",
            "name" => "Slug por minuto",
            "simbol" => "slug/min",
        ]);
        Unit::create([
            "code" => "L68",
            "name" => "Slug por segundo",
            "simbol" => "slug/s",
        ]);
        Unit::create([
            "code" => "L69",
            "name" => "Tonelada por kelvin",
            "simbol" => "t/K",
        ]);
        Unit::create([
            "code" => "L70",
            "name" => "Tonelada por bar",
            "simbol" => "t/bar",
        ]);
        Unit::create([
            "code" => "L71",
            "name" => "Tonelada por día",
            "simbol" => "t/d",
        ]);
        Unit::create([
            "code" => "L72",
            "name" => "Tonelada por día kelvin",
            "simbol" => "(t/d)/K",
        ]);
        Unit::create([
            "code" => "L73",
            "name" => "Tonelada por día bar",
            "simbol" => "(t/d)/bar",
        ]);
        Unit::create([
            "code" => "L74",
            "name" => "Tonelada por hora kelvin",
            "simbol" => "(t/h)/K",
        ]);
        Unit::create([
            "code" => "L75",
            "name" => "Tonelada por hora bar",
            "simbol" => "(t/h)/bar",
        ]);
        Unit::create([
            "code" => "L76",
            "name" => "Tonelada por metro cúbico kelvin",
            "simbol" => "(t/m³)/K",
        ]);
        Unit::create([
            "code" => "L77",
            "name" => "Tonelada por metro cúbico bar",
            "simbol" => "(t/m³)/bar",
        ]);
        Unit::create([
            "code" => "L78",
            "name" => "Tonelada por minuto",
            "simbol" => "t/min",
        ]);
        Unit::create([
            "code" => "L79",
            "name" => "Tonelada por minuto kelvin",
            "simbol" => "(t/min)/K",
        ]);
        Unit::create([
            "code" => "L80",
            "name" => "Tonelada por minuto bar",
            "simbol" => "(t/min)/bar",
        ]);
        Unit::create([
            "code" => "L81",
            "name" => "Tonelada por segundo",
            "simbol" => "t/s",
        ]);
        Unit::create([
            "code" => "L82",
            "name" => "Tonelada por segundo kelvin",
            "simbol" => "(t/s)/K",
        ]);
        Unit::create([
            "code" => "L83",
            "name" => "Tonelada por segundo bar",
            "simbol" => "(t/s)/bar",
        ]);
        Unit::create([
            "code" => "L84",
            "name" => "Tonelada (flota UK)",
            "simbol" => "British shipping ton",
        ]);
        Unit::create([
            "code" => "L85",
            "name" => "Tonelada larga por día",
            "simbol" => "ton (UK)/d",
        ]);
        Unit::create([
            "code" => "L86",
            "name" => "Tonelada (flota estados uncodeos)",
            "simbol" => "(US) shipping ton",
        ]);
        Unit::create([
            "code" => "L87",
            "name" => "Tonelada corta por grado fahrenheit",
            "simbol" => "ton (US)/°F",
        ]);
        Unit::create([
            "code" => "L88",
            "name" => "Tonelada corta por día",
            "simbol" => "ton (US)/d",
        ]);
        Unit::create([
            "code" => "L89",
            "name" => "Tonelada corta por hora grados fahrenheit",
            "simbol" => "ton (US)/(h·°F)",
        ]);
        Unit::create([
            "code" => "L90",
            "name" => "Tonelada corta por hora libra-fuerza por pulgada cuadrada",
            "simbol" => "(ton (US)/h)/psi",
        ]);
        Unit::create([
            "code" => "L91",
            "name" => "Tonelada corta por psi",
            "simbol" => "ton (US)/psi",
        ]);
        Unit::create([
            "code" => "L92",
            "name" => "Tonelada larga (UK) por yarda cúbica",
            "simbol" => "ton.l/yd³ (UK)",
        ]);
        Unit::create([
            "code" => "L93",
            "name" => "Tonelada corta (estados uncodeos) por yarda cúbica",
            "simbol" => "ton.s/yd³ (US)",
        ]);
        Unit::create([
            "code" => "L94",
            "name" => "Tonelada fuerza",
            "simbol" => "ton.sh-force",
        ]);
        Unit::create([
            "code" => "L95",
            "name" => "Año común",
            "description" => "Es un año civil de 365 días, uno menos que el año bisiesto, por lo que tiene exactamente 52 semanas y un día. El reparto de los años civiles entre años comunes y años bisiestos se hace de acuerdo con el calendario gregoriano: en cada período de 400 años hay 303 comunes y 97 bisiestos.",
            "simbol" => "y (365 days)",
        ]);
        Unit::create([
            "code" => "L96",
            "name" => "Año scodeeral",
            "description" => "Es el tiempo que trascurre entre dos pasos consecutivos de la Tierra por un mismo punto de su órbita, tomando como referencia a las estrellas.",
            "simbol" => "y (scodeereal)",
        ]);
        Unit::create([
            "code" => "L98",
            "name" => "Yarda por grado fahrenheit",
            "simbol" => "yd/°F",
        ]);
        Unit::create([
            "code" => "L99",
            "name" => "Yarda por psi (libra por pulgada cuadrada)",
            "simbol" => "yd/psi",
        ]);
        Unit::create([
            "code" => "LA",
            "name" => "Libra por pulgada cúbica ",
            "simbol" => "lb/in³",
        ]);
        Unit::create([
            "code" => "LAC",
            "name" => "Porcentaje de exceso de lactosa",
            "description" => "Uncodead de proporción que define el porcentaje de lactosa en un producto que excede un nivel de porcentaje defincodeo.",
        ]);
        Unit::create([
            "code" => "LBR",
            "name" => "Libra",
            "description" => "Uncodead monetaria de Irlanda (hasta su sustitución por el euro), Reino Uncodeo, Chipre, Egipto, Líbano, Malta, Siria y otros países.",
            "simbol" => "lb",
        ]);
        Unit::create([
            "code" => "LBT",
            "name" => "Troy pound",
        ]);
        Unit::create([
            "code" => "LC",
            "name" => "Centímetro lineal",
        ]);
        Unit::create([
            "code" => "LD",
            "name" => "Litro por día",
            "simbol" => "l/d",
        ]);
        Unit::create([
            "code" => "LE",
            "name" => "Lite",
        ]);
        Unit::create([
            "code" => "LEF",
            "name" => "Hoja",
            "description" => "Uncodead de conteo que define el número de hojas.",
        ]);
        Unit::create([
            "code" => "LF",
            "name" => "Pie lineal",
            "description" => "Uncodead de conteo que define el número de pies (12 pulgadas) de longitud de un objeto de ancho uniforme.",
        ]);
        Unit::create([
            "code" => "LH",
            "name" => "Hora de trabajo",
            "description" => "Uncodead de tiempo que define el número de horas de trabajo.",
        ]);
        Unit::create([
            "code" => "LI",
            "name" => "Pulgada lineal",
        ]);
        Unit::create([
            "code" => "LJ",
            "name" => "Spray grande",
        ]);
        Unit::create([
            "code" => "LK",
            "name" => "Enlazar",
            "description" => "Uncodead de distancia igual a 0.01 cadena.",
        ]);
        Unit::create([
            "code" => "LM",
            "name" => "Metro lineal",
            "description" => "Uncodead de conteo que define el número de metros de longitud de un objeto de ancho uniforme.",
        ]);
        Unit::create([
            "code" => "LN",
            "name" => "Longitud",
            "description" => "Uncodead de distancia que define la extensión lineal de un elemento medcodeo de extremo a extremo.",
        ]);
        Unit::create([
            "code" => "LO",
            "name" => "Lote Unit::create([uncodead de adquisición]",
            "description" => "Uncodead de conteo que define el número de lotes (lote: una colección de artículos asociados).",
        ]);
        Unit::create([
            "code" => "LP",
            "name" => "Libra líqucodea",
            "description" => "Uncodead de masa que define el número de libras de una sustancia líqucodea.",
        ]);
        Unit::create([
            "code" => "LPA",
            "name" => "Litro de alcohol puro",
            "description" => "Uncodead de volumen igual a un litro de alcohol puro.",
        ]);
        Unit::create([
            "code" => "LR",
            "name" => "Capa ",
            "description" => "Uncodead de conteo que define el número de capas.",
        ]);
        Unit::create([
            "code" => "LS",
            "name" => "Suma global",
            "description" => "Uncodead de conteo que define el número de cantcodeades monetarias completas o completas.",
        ]);
        Unit::create([
            "code" => "LTN",
            "name" => "Tonelada (UK) o tonelada larga (estados uncodeos)",
            "description" => "Sinónimo: tonelada bruta (2240 ​​lb)",
            "simbol" => "ton (UK)",
        ]);
        Unit::create([
            "code" => "LTR",
            "name" => "Litro",
            "description" => "Es una uncodead de volumen equivalente a un decímetro cúbico (1 dm³). Su uso es aceptado en el Sistema Internacional de Uncodeades (SI), aunque ya no pertenece estrictamente a él.",
            "simbol" => "l",
        ]);
        Unit::create([
            "code" => "LUB",
            "name" => "Tonelada métrica, aceite lubricante",
            "description" => "Uncodead de masa que define el número de toneladas métricas de aceite lubricante.",
        ]);
        Unit::create([
            "code" => "LUM",
            "name" => "Lumen",
            "description" => "El lumen es la uncodead estándar del flujo luminoso de una fuente de luz. Es una uncodead derivada del sistema internacional, basada en la candela.",
            "simbol" => "lm",
        ]);
        Unit::create([
            "code" => "LUX",
            "name" => "Lux",
            "description" => "Un lux es la inccodeencia perpendicular de un lumen en una superficie de 1 metro cuadrado. Equivale a 0.0929 lúmenes.",
            "simbol" => "lx",
        ]);
        Unit::create([
            "code" => "LX",
            "name" => "Yarda lineal por libra",
        ]);
        Unit::create([
            "code" => "LY",
            "name" => "Yarda lineal",
            "description" => "Uncodead de conteo que define el número de uncodeades de 36 pulgadas en longitud de un objeto de ancho uniforme.",
        ]);
        Unit::create([
            "code" => "M0",
            "name" => "cinta magnética",
        ]);
        Unit::create([
            "code" => "M1",
            "name" => "Miligramo por litro",
            "simbol" => "mg/l",
        ]);
        Unit::create([
            "code" => "M10",
            "name" => "Reciproccodead de la yarda cuadrada",
            "simbol" => "1/yd³",
        ]);
        Unit::create([
            "code" => "M11",
            "name" => "Yarda cúbica por grado fahrenheit",
            "simbol" => "yd³/°F",
        ]);
        Unit::create([
            "code" => "M12",
            "name" => "Yarda cúbica por día",
            "simbol" => "yd³/d",
        ]);
        Unit::create([
            "code" => "M13",
            "name" => "Yarda cúbica por hora ",
            "simbol" => "yd³/h",
        ]);
        Unit::create([
            "code" => "M14",
            "name" => "Yarda cúbica por psi (libra por pulgada cuadrada)",
            "simbol" => "yd³/psi",
        ]);
        Unit::create([
            "code" => "M15",
            "name" => "Yarda cúbica por minuto",
            "simbol" => "yd³/min",
        ]);
        Unit::create([
            "code" => "M16",
            "name" => "Yarda cúbica por segundo",
            "simbol" => "yd³/s",
        ]);
        Unit::create([
            "code" => "M17",
            "name" => "Kilohertz metro",
            "simbol" => "kHz·m",
        ]);
        Unit::create([
            "code" => "M18",
            "name" => "Gigahertz metro",
            "simbol" => "GHz·m",
        ]);
        Unit::create([
            "code" => "M19",
            "name" => "Beaufort",
            "description" => "Una medcodea empírica para describir la veloccodead del viento basada principalmente en condiciones marinas observadas. La escala de Beaufort indica la veloccodead del viento por números que típicamente varían de 0 para la calma, a 12 para el huracán.",
            "simbol" => "Bft",
        ]);
        Unit::create([
            "code" => "M20",
            "name" => "Recíproco de megakelvin ó megakelvin a la potencia menos 1",
            "simbol" => "1/MK",
        ]);
        Unit::create([
            "code" => "M21",
            "name" => "Kilovoltio-amperio hora recíproccodead",
            "simbol" => "1/kVAh",
        ]);
        Unit::create([
            "code" => "M22",
            "name" => "Milímetro por centímetro cuadrado minuto",
            "simbol" => "(ml/min)/cm²",
        ]);
        Unit::create([
            "code" => "M23",
            "name" => "Newton por centímetro",
            "simbol" => "N/cm",
        ]);
        Unit::create([
            "code" => "M24",
            "name" => "Ohm kilómetro",
            "simbol" => "Ω·km",
        ]);
        Unit::create([
            "code" => "M25",
            "name" => "Porcentaje por grado celsius",
            "description" => "Uncodead de proporción, igual a 0,01, en relación a una temperatura de un grado.",
            "simbol" => "%/°C",
        ]);
        Unit::create([
            "code" => "M26",
            "name" => "GigaOhm por metro",
            "simbol" => "GΩ/m",
        ]);
        Unit::create([
            "code" => "M27",
            "name" => "Megahertz metro",
            "simbol" => "MHz·m",
        ]);
        Unit::create([
            "code" => "M29",
            "name" => "Kilogramo por kilogramo",
            "simbol" => "kg/kg",
        ]);
        Unit::create([
            "code" => "M30",
            "name" => "voltio-amperio segundo recíproccodead",
            "simbol" => "1/(V·A·s)",
        ]);
        Unit::create([
            "code" => "M31",
            "name" => "Kilogramo por kilómetro",
            "simbol" => "kg/km",
        ]);
        Unit::create([
            "code" => "M32",
            "name" => "Segundos pascal por litro",
            "simbol" => "Pa·s/l",
        ]);
        Unit::create([
            "code" => "M33",
            "name" => "MiliMol por litro",
            "simbol" => "mmol/l",
        ]);
        Unit::create([
            "code" => "M34",
            "name" => "Newton metro por metro cuadrado",
            "simbol" => "N·m/m²",
        ]);
        Unit::create([
            "code" => "M35",
            "name" => "Milivoltio - amperio",
            "simbol" => "mV·A",
        ]);
        Unit::create([
            "code" => "M36",
            "name" => "Mes de 30 días",
            "description" => "Uncodead de cuenta que define el número de meses expresado en múltiplos de 30 días, un día es igual a 24 horas.",
            "simbol" => "mo (30 days)",
        ]);
        Unit::create([
            "code" => "M37",
            "name" => "Actual 360",
            "description" => "Uncodead de cuenta que define el número de años expresado en múltiplos de 360 días, un día es igual a 24 horas.",
            "simbol" => "y (360 days)",
        ]);
        Unit::create([
            "code" => "M38",
            "name" => "Kilómetro por segundo cuadrado",
            "description" => "1000 veces de la uncodead base del sistema internacional divcodecodeo por la potencia de la uncodead base del sistema internacional por el segundo al  exponente 2.",
            "simbol" => "km/s²",
        ]);
        Unit::create([
            "code" => "M39",
            "name" => "Centímetro por segundo cuadrado",
            "description" => "0.01 veces de uncodead de base del sistema internacional divcodecodeo por la potencia de la uncodead de base del sistema internacional en segundo lugar por el exponente 2.",
            "simbol" => "cm/s²",
        ]);
        Unit::create([
            "code" => "M4",
            "name" => "Valor monetario",
            "description" => "Uncodead de medcodea expresada como un monto monetario.",
        ]);
        Unit::create([
            "code" => "M40",
            "name" => "Yarda por segundo cuadrado",
            "description" => "Uncodead de longitud de acuerdo con el sistema Anglo-Americano y el sistema imperial de uncodeades, divcodecodeo por la potencia de la uncodead del sistema internacional, segundo elevado al exponente 2.",
            "simbol" => "yd/s²",
        ]);
        Unit::create([
            "code" => "M41",
            "name" => "Milímetro por segundo cuadrado",
            "description" => "0.001 veces de uncodead de base del sistema internacional, divcodecodeo por la potencia de la uncodead de base del sistema internacional por el segundo exponente 2.",
            "simbol" => "mm/s²",
        ]);
        Unit::create([
            "code" => "M42",
            "name" => "Milla (milla estatal)  por segundo cuadrado",
            "description" => "Uncodead de la longitud según el sistema Imperial de uncodeades divcodecodeo por la potencia de la uncodead base del sistema internacional por segundo por el exponente 2.",
            "simbol" => "mi/s²",
        ]);
        Unit::create([
            "code" => "M43",
            "name" => "Mil (uncodead de Medcodea Militar)",
            "description" => "Uncodead para indicar un ángulo en la zona militar, igual a la 6400ª parte del círculo completo del 360° ó 2  pi radian.",
            "simbol" => "mil",
        ]);
        Unit::create([
            "code" => "M44",
            "name" => "Revolución",
            "description" => "Uncodead para codeentificar un ángulo de un círculo de 360 grados ó 2*pi*radio (Referencia ISO/TC12 SI Guía).",
            "simbol" => "rev",
        ]);
        Unit::create([
            "code" => "M45",
            "name" => "Grado por segundo cuadrado",
            "description" => "360 partes de un círculo completo divcodecodeo por la potencia de la uncodead de base SI en segundo lugar y el exponente 2.",
            "simbol" => "°/s²",
        ]);
        Unit::create([
            "code" => "M46",
            "name" => "Revolución por minuto",
            "simbol" => "r/min",
        ]);
        Unit::create([
            "code" => "M47",
            "name" => "Circular Mil",
            "description" => "Uncodead que representa el área del círculo de un mil de diámetro.",
            "simbol" => "cmil",
        ]);
        Unit::create([
            "code" => "M48",
            "name" => "Milla cuadrada (basado en u.s survey foot)",
            "description" => "Uncodead de área que es principalmente usada en la agricultura y en la forestación.",
            "simbol" => "mi² (US survey)",
        ]);
        Unit::create([
            "code" => "M49",
            "name" => "Cadena ",
            "description" => " Es una uncodead de longitud utilizada para medir terrenos. Equivale a 20,1168 metros, y en inglés se llama surveyor chain.",
            "simbol" => "ch (US survey) ",
        ]);
        Unit::create([
            "code" => "M5",
            "name" => "Microcurie",
            "simbol" => "µCi",
        ]);
        Unit::create([
            "code" => "M50",
            "name" => "Estadio",
            "description" => "Uncodead comunmente usada en Gran Bretaña en distancias rurales: 1 furlong = 40 rods = 10 cadenas (UK) =1/8 de milla = 1/10 furlong = 220 yardas =660 pies.",
            "simbol" => "fur",
        ]);
        Unit::create([
            "code" => "M51",
            "name" => "Pie (Topografía UEA)",
            "description" => "Uncodead comunmente usada en los estados uncodeos para la inspección de artillería.",
            "simbol" => "ft (US survey) ",
        ]);
        Unit::create([
            "code" => "M52",
            "name" => "Milla",
            "description" => "Uncodead comunmente usada en los Estados Uncodeos para la inspección de artillería.",
            "simbol" => "mi (US survey) ",
        ]);
        Unit::create([
            "code" => "M53",
            "name" => "Metro por pascal",
            "description" => "Metro, uncodead del Sistema Internacional divcodecodeo por Pascal, Uncodead del Sistema Internacional",
            "simbol" => "m/Pa",
        ]);
        Unit::create([
            "code" => "M55",
            "name" => "Metro por radián",
            "description" => "Uncodead del factor de conversión para la implementación de rotación a movimiento lineal.",
            "simbol" => "m/rad",
        ]);
        Unit::create([
            "code" => "M56",
            "name" => "Shake ",
            "description" => "Uncodead para un periódo muy corto.",
            "simbol" => "shake",
        ]);
        Unit::create([
            "code" => "M57",
            "name" => "Milla por minuto",
            "description" => "Uncodead de veloccodead del sistema inglés de uncodeades.",
            "simbol" => "mi/min",
        ]);
        Unit::create([
            "code" => "M58",
            "name" => "Milla por segundo",
            "description" => "Uncodead de veloccodead del sistema inglés de uncodeades.",
            "simbol" => "mi/s",
        ]);
        Unit::create([
            "code" => "M59",
            "name" => "Metro por segundo pascal",
            "description" => "Metro divcodecodeo por el producto de SI uncodead base segundo y el derivado uncodead SI pascal.",
            "simbol" => "(m/s)/Pa",
        ]);
        Unit::create([
            "code" => "M60",
            "name" => "Metro por hora",
            "description" => "Metro,uncodead del sistema internacional divcodecodeo por la uncodead de hora.",
            "simbol" => "m/h",
        ]);
        Unit::create([
            "code" => "M61",
            "name" => "Pulgada por año",
            "description" => "Uncodead de longitud según el sistema de uncodeades Anglo-Americano y el sistema Imperial de uncodeades divcodecodeo por la uncodead común año de 365 días.",
            "simbol" => "in/y",
        ]);
        Unit::create([
            "code" => "M62",
            "name" => "Kilómetro por segundo",
            "description" => "1000 veces del medcodeor de uncodead de base SI divcodecodeo por la segunda uncodead de base SI.",
            "simbol" => "km/s",
        ]);
        Unit::create([
            "code" => "M63",
            "name" => "Pulgada por minuto",
            "description" => "Uncodead de pulgada de acuerdo con el sistema de uncodeades Anglo-Americanas e Imperial divcodecodeo por el minuto de uncodead.",
            "simbol" => "in/min",
        ]);
        Unit::create([
            "code" => "M64",
            "name" => "Yarda por segundo",
            "description" => "Uncodead de yarda de acuerdo con el sistema de uncodeades Anglo-Americanas e Imperial divcodecodeo por la uncodead de base segundo.",
            "simbol" => "yd/s",
        ]);
        Unit::create([
            "code" => "M65",
            "name" => "Yarda por minuto",
            "description" => "Uncodead de yarda de acuerdo con el sistema de uncodeades Anglo-Americanas e Imperial divcodecodeo por el minuto de uncodead.",
            "simbol" => "yd/min",
        ]);
        Unit::create([
            "code" => "M66",
            "name" => "Yarda por hora",
            "description" => "Uncodead de yarda de acuerdo con el sistema Anglo-Americano y el sistema Imperial de uncodeades, divcodecodeo por la uncodead de minuto.",
            "simbol" => "yd/h",
        ]);
        Unit::create([
            "code" => "M67",
            "name" => "Acre-pie",
            "description" => "Uncodead de volúmen, la cúal es usada en los Estados Uncodeos para medir la capaccodead de las presas.",
            "simbol" => "acre-ft (US survey)",
        ]);
        Unit::create([
            "code" => "M68",
            "name" => "Cordón",
            "description" => "Uncodead tradicional del volumen de leña apilada que se ha medcodeo con un cordón.",
            "simbol" => "cord",
        ]);
        Unit::create([
            "code" => "M69",
            "name" => "Milla cúbica (reinouncodeo)",
            "simbol" => "mi³",
        ]);
        Unit::create([
            "code" => "M7",
            "name" => "Micro-pulgada",
            "simbol" => "µin",
        ]);
        Unit::create([
            "code" => "M70",
            "name" => "Uncodead tradicional de capaccodead de carga",
            "simbol" => "RT",
        ]);
        Unit::create([
            "code" => "M71",
            "name" => "Metro cúbico por pascal (joules)",
            "description" => "Uncodead de Energía del sistema internacional, metro elevado al exponente 3 y divcodecodeo por la uncodead pascal.",
            "simbol" => "m³/Pa",
        ]);
        Unit::create([
            "code" => "M72",
            "name" => "Bel",
            "description" => "las décimas de bel, o decibeles. El logaritmo de la relación del soncodeo o la señal con un estándar proporciona la medición del decibel. ... El símbolo correspondiente a la uncodead es B, pero dB es la uncodead estándar.",
            "simbol" => "B",
        ]);
        Unit::create([
            "code" => "M73",
            "name" => "Kilogramo por metro cúbico pascal",
            "description" => "Uncodead base del sistema internacional kilogramo, divcodecodeo por el producto de metro elevado al exponente 3 por pascal.",
            "simbol" => "(kg/m³)/Pa",
        ]);
        Unit::create([
            "code" => "M74",
            "name" => "Kilogramo por pascal",
            "simbol" => "kg/Pa",
        ]);
        Unit::create([
            "code" => "M75",
            "name" => "Kilolibra fuerza",
            "description" => "100 veces la uncodead de fuerza, libra fueza de acuerdo con la relación del sistema de uncodeades  Anglo-Americano",
            "simbol" => "kip",
        ]);
        Unit::create([
            "code" => "M76",
            "name" => "Poundal",
            "description" => "Uncodead no conforme al sistema internacional de la potencia, que corresponde a una masa de una libra multiplicada con la aceleración de un pie por segundo cuadrado.",
            "simbol" => "pdl",
        ]);
        Unit::create([
            "code" => "M77",
            "name" => "Kilogramo metro por segundo cuadrado",
            "description" => "Producto del kilogramo,uncodead base del sistema internacional y del metro, uncodead base del sistema internacional divcodecodeo por la potencia del segundo elevado al exponente 2.",
            "simbol" => "kg·m/s²",
        ]);
        Unit::create([
            "code" => "M78",
            "name" => "Pond",
            "description" => "0.001 veces de la uncodead del peso, defincodea como una masa de 1 kg que se encuentra sobre una fuerza de peso de 1 kp por la fuerza gravitatoria al nivel del mar, que corresponde a una fuerza de 9,806 65 newton.",
            "simbol" => "p",
        ]);
        Unit::create([
            "code" => "M79",
            "name" => "Pie cuadrado por hora",
            "description" => "Potencia de la uncodead pie, de acuerdo con el sistema Anglo-Americano e Imperial de uncodeades, elevado al exponente 2 y divcodecodeo por la uncodead derivada pascal del sistema internacional de uncodeades.",
            "simbol" => "ft²/h",
        ]);
        Unit::create([
            "code" => "M80",
            "name" => "Stokes por pascal",
            "description" => "CGS (Centímetro-Gramo-Segundo sistema) uncodead stokes divcodecodeo por la uncodead derivada del sistema internacional, pascal.",
            "simbol" => "St/Pa",
        ]);
        Unit::create([
            "code" => "M81",
            "name" => "Centímetro cuadrado por segundo",
            "simbol" => "cm²/s",
        ]);
        Unit::create([
            "code" => "M82",
            "name" => "Metro cuadrado por segundo pascal",
            "description" => "Potencia de la uncodead base, metro, del sistema internacional con el exponente 2, divcodecodeo por la uncodead base, segundo, y la uncodead derivada, pascal, ambas del sistema internacional.",
            "simbol" => "(m²/s)/Pa",
        ]);
        Unit::create([
            "code" => "M83",
            "name" => "Denier",
            "description" => "Uncodead tradicional para la indicación de la masa lineal de fibras e hilados nameiles.",
            "simbol" => "den",
        ]);
        Unit::create([
            "code" => "M84",
            "name" => "Libra por yarda ",
            "description" => "Uncodead de masa lineal según el sistema de uncodeades avoirdupois.",
            "simbol" => "lb/yd",
        ]);
        Unit::create([
            "code" => "M85",
            "name" => "Tonelada, ensayo",
            "description" => "Uncodead de masa no conforme al sistema internacional, utilizada en la mineralogía para determinar la concentración de metales preciosos en el mineral de acuerdo con la masa del metal precioso en miligramos en una muestra de la masa de un soncodeo de ensayo (número de onzas troy en una tonelada corta (1 000 lb)).",
        ]);
        Unit::create([
            "code" => "M86",
            "name" => "Libra Alemana",
            "description" => "Anticuada uncodead de masa usada en Alemania.",
            "simbol" => "pfd",
        ]);
        Unit::create([
            "code" => "M87",
            "name" => "Kilogramo por segundo pascal",
            "description" => "Es la uncodead base kilogramo divcodecodeo por el producto de la uncodead base segundo y la derivada de la uncodead pascal.",
            "simbol" => "(kg/s)/Pa",
        ]);
        Unit::create([
            "code" => "M88",
            "name" => "Tonelada por mes",
            "description" => "Uncodead tonelada métrica divcodecodea por la uncodead mes",
            "simbol" => "t/mo",
        ]);
        Unit::create([
            "code" => "M89",
            "name" => "Tonelada por año",
            "description" => "Uncodead tonelada métrica divcodecodea por la uncodead año con 365 días",
            "simbol" => "t/y",
        ]);
        Unit::create([
            "code" => "M9",
            "name" => "Millones de btu por 1000 pies cúbicos",
            "simbol" => "MBTU/kft³",
        ]);
        Unit::create([
            "code" => "M90",
            "name" => "Kilolibra por hora",
            "description" => "1000 veces la uncodead de la masa libra avoirdupois de acuerdo con el sistema unitario avoirdupois divcodecodeo por la uncodead de hora.",
            "simbol" => "klb/h",
        ]);
        Unit::create([
            "code" => "M91",
            "name" => "Libra por libra",
            "description" => "Proporción de la masa consistente en la libra avoirdupois según el sistema unitario avoirdupois divcodecodeo por la libra avoirdupois según el sistema unitario avoirdupois.",
            "simbol" => "lb/lb",
        ]);
        Unit::create([
            "code" => "M92",
            "name" => "Libra fuerza pie",
            "description" => "Producto de la uncodead libra fuerza, de acuerdo con el sistema de uncodeades Anglo-Americano, y la uncodead pie, de acuerdo con el sistema de uncodeades, Anglo-Americano y el sistema imperial de uncodeades.",
            "simbol" => "lbf·ft",
        ]);
        Unit::create([
            "code" => "M93",
            "name" => "Newton metro por radián",
            "description" => "Producto de la uncodead derivada del sistema internacional, newton y de la uncodead base , metro, divcodecodea por la uncodead radián.",
            "simbol" => "N·m/rad",
        ]);
        Unit::create([
            "code" => "M94",
            "name" => "Kilogramo metro",
            "description" => "Uncodead de desequilibrio como producto del kilogramo  y el metro.",
            "simbol" => "kg·m",
        ]);
        Unit::create([
            "code" => "M95",
            "name" => "Poundal pie",
            "description" => "Producto de la uncodead poundal, no conforme al sistema internacional de uncodeades, y la uncodead pie, de acuerdo con el sistema de uncodeades Anglo-Americano y el sistema imperial.",
            "simbol" => "pdl·ft",
        ]);
        Unit::create([
            "code" => "M96",
            "name" => "Poundal pulgada",
            "description" => "Producto de la uncodead poundal, no conforme al sistema internacional de uncodeades, y la uncodead pulgada, de acuerdo con el sistema de uncodeades Anglo-Americano y el sistema imperial.",
            "simbol" => "pdl·in",
        ]);
        Unit::create([
            "code" => "M97",
            "name" => "Dina metro",
            "description" => "CGS (Centímetro-Gramo-Segundo sistema) uncodead del momento de rotación.",
            "simbol" => "dyn·m",
        ]);
        Unit::create([
            "code" => "M98",
            "name" => "Kilogramo centímetro por segundo",
            "description" => "Producto del kilogramo de uncodead de base SI y  0.01 veces de metro uncodead de base SI divcodecodeo por la uncodead de base SI en segundo.",
            "simbol" => "kg·(cm/s)",
        ]);
        Unit::create([
            "code" => "M99",
            "name" => "Gramo centímetro por segundo",
            "description" => "Producto del 0.001 veces del kilogramo de la uncodead base SI y el 0,01 veces del metro de la uncodead base SI divcodecodeo por la uncodead base SI, segundo.",
            "simbol" => "g·(cm/s)",
        ]);
        Unit::create([
            "code" => "MA",
            "name" => "Máquina por uncodead",
        ]);
        Unit::create([
            "code" => "MAH",
            "name" => "Megavoltio amperio reactivo hora",
            "description" => "Define la cantcodead total de potencia reactiva a través de un sistema de potencia.",
            "simbol" => "Mvar·h",
        ]);
        Unit::create([
            "code" => "MAL",
            "name" => "Megalitro",
            "simbol" => "Ml",
        ]);
        Unit::create([
            "code" => "MAM",
            "name" => "Megametro",
            "description" => "Es la uncodead de longitud que equivale a un millón de metros.",
            "simbol" => "Mm",
        ]);
        Unit::create([
            "code" => "MAR",
            "name" => "Megavar",
            "description" => "Una uncodead de potencia reactiva eléctrica representada por una corriente de mil amperios que fluye debcodeo a una diferencia de potencial de mil voltios donde el seno del ángulo de fase entre ellos es 1.",
            "simbol" => "kvar",
        ]);
        Unit::create([
            "code" => "MAW",
            "name" => "Megawatt",
            "description" => "Uncodead de potencia que define la tasa de energía transfercodea o consumcodea cuando una corriente de 1000 amperios fluye debcodeo a un potencial de 1000 volts al factor de potencia unitario.",
            "simbol" => "MW",
        ]);
        Unit::create([
            "code" => "MBE",
            "name" => "Mil equivalente de ladrillo estándar",
            "description" => "Uncodead de cuenta que define el número de mil uncodeades equivalentes de ladrillo.",
        ]);
        Unit::create([
            "code" => "MBF",
            "name" => "Mil pies de tabla",
        ]);
        Unit::create([
            "code" => "MBR",
            "name" => "Milibar",
            "simbol" => "mbar",
        ]);
        Unit::create([
            "code" => "MC",
            "name" => "Microgramo",
            "simbol" => "µg",
        ]);
        Unit::create([
            "code" => "MCU",
            "name" => "Milicurie",
            "simbol" => "mCi",
        ]);
        Unit::create([
            "code" => "MD",
            "name" => "Tonelada métrica seca al aire",
            "description" => "Uncodead de conteo que define el número de toneladas métricas de un producto, sin tener en cuenta el contencodeo de agua del producto.",
        ]);
        Unit::create([
            "code" => "MF",
            "name" => "Miligramo por pie cuadrado por lado",
        ]);
        Unit::create([
            "code" => "MGM",
            "name" => "Miligramo",
            "description" => "Medcodea de masa, de símbolo mg, que es igual a la milésima parte de un gramo.",
            "simbol" => "mg",
        ]);
        Unit::create([
            "code" => "MHZ",
            "name" => "Megahertz",
            "description" => "Medcodea de frecuencia que es igual a 1 millón de hertz.",
            "simbol" => "MHz",
        ]);
        Unit::create([
            "code" => "MIK",
            "name" => "Milla cuadrada (milla estatal)",
            "description" => " Es una uncodead de superficie equivalente a un cuadrado cuyos lados mcodeen una milla estatutaria.",
            "simbol" => "mi²",
        ]);
        Unit::create([
            "code" => "MIL",
            "name" => "Mil",
            "description" => "Es un número natural que se escribe 1000 o 10³ en notación científica, y que sigue del 999 y precede al 1001.",
        ]);
        Unit::create([
            "code" => "MIN",
            "name" => "Minuto Unit::create([uncodead de tiempo]",
            "description" => "Es una uncodead de tiempo que equivale a la sexagésima parte de una hora. También comprende 60 segundos. Su símbolo es min (adviértase que no es una abreviatura: no admite mayúscula, ni punto, ni plural). ",
            "simbol" => "min",
        ]);
        Unit::create([
            "code" => "MIO",
            "name" => "Millon",
            "description" => "Es igual a mil millares, o 106. El concepto de millón también se puede expresar mediante el prefijo mega antepuesto a uncodeades del SI. Etimología: millón proviene del término italiano milione (del latín: mille).",
        ]);
        Unit::create([
            "code" => "MIU",
            "name" => "Uncodead internacional de millon",
            "description" => "Uncodead de cuenta que define el número de uncodeades internacionales en múltiplos de 106.",
        ]);
        Unit::create([
            "code" => "MK",
            "name" => "Miligramo por pulgada cuadrada",
            "simbol" => "Mg / in²",
        ]);
        Unit::create([
            "code" => "MLD",
            "name" => "Mil millones",
            "description" => "Sinónimo: billon (US)",
        ]);
        Unit::create([
            "code" => "MLT",
            "name" => "Mililitro",
            "description" => "Medcodea de volumen, de símbolo ml, que es igual a la milésima parte de un litro.",
            "simbol" => "ml",
        ]);
        Unit::create([
            "code" => "MMK",
            "name" => "Milímetro cuadrado",
            "description" => "Medcodea de longitud, de símbolo mm, que es igual a la milésima parte de un metro.",
            "simbol" => "mm²",
        ]);
        Unit::create([
            "code" => "MMQ",
            "name" => "Milímetro cúbico",
            "description" => "Medcodea de longitud, de símbolo mm, que es igual a la milésima parte de un metro.",
            "simbol" => "mm³",
        ]);
        Unit::create([
            "code" => "MMT",
            "name" => "Milímetro",
            "description" => "Es una uncodead de longitud. Es el tercer submúltiplo del metro y equivale a la milésima parte de él. ",
            "simbol" => "mm",
        ]);
        Unit::create([
            "code" => "MND",
            "name" => "Kilogramo, peso seco",
            "description" => "Uncodead de masa que define el número de kilogramos de un producto, sin tener en cuenta el contencodeo de agua del producto.",
        ]);
        Unit::create([
            "code" => "MON",
            "name" => "Mes ",
            "description" => "Uncodead de tiempo equivalente a 1/12 de año de 365.25 días.",
            "simbol" => "mo",
        ]);
        Unit::create([
            "code" => "MPA",
            "name" => "Megapascal",
            "simbol" => "MPa",
        ]);
        Unit::create([
            "code" => "MQ",
            "name" => "Mil metros",
        ]);
        Unit::create([
            "code" => "MQH",
            "name" => "Metro cúbico por hora",
            "simbol" => "m³/h",
        ]);
        Unit::create([
            "code" => "MQS",
            "name" => "Metro cúbico por segundo",
            "simbol" => "m³/s",
        ]);
        Unit::create([
            "code" => "MSK",
            "name" => "Metro por segundo cuadrado",
            "description" => "Es la aceleración de un cuerpo, animado de movimiento uniformemente variado, cuya veloccodead varía cada segundo, 1 m/s. ",
            "simbol" => "m/s²",
        ]);
        Unit::create([
            "code" => "MTK",
            "name" => "Metro cuadrado",
            "description" => "Es la uncodead básica de superficie en el Sistema Internacional de Uncodeades. Si a esta uncodead se antepone un prefijo del Sistema Internacional se crea un múltiplo o submúltiplo de esta.",
            "simbol" => "m²",
        ]);
        Unit::create([
            "code" => "MTQ",
            "name" => "Metro cúbico",
            "description" => "Sinónimo: metro cúbico",
            "simbol" => "m³",
        ]);
        Unit::create([
            "code" => "MTR",
            "name" => "Metro",
            "description" => "El metro (símbolo m) es la principal uncodead de longitud del Sistema Internacional de Uncodeades. Un metro es la distancia que recorre la luz en el vacío en un intervalo de 1/299 792 458 de segundo.",
            "simbol" => "m",
        ]);
        Unit::create([
            "code" => "MTS",
            "name" => "Metro por segundo",
            "description" => "Es la veloccodead de un cuerpo que, con movimiento uniforme, recorre, una longitud de un metro en 1 segundo .",
            "simbol" => "m/s",
        ]);
        Unit::create([
            "code" => "MV",
            "name" => "Número de mults",
        ]);
        Unit::create([
            "code" => "MVA",
            "name" => "Megavoltio - amperio",
            "simbol" => "MV·A",
        ]);
        Unit::create([
            "code" => "MWH",
            "name" => "Megawatt hora",
            "description" => "Uncodead de potencia que define la cantcodead total de energía a granel transfercodea o consumcodea.",
            "simbol" => "MW·h",
        ]);
        Unit::create([
            "code" => "N1",
            "name" => "Pluma calórica",
            "description" => "Uncodead de conteo que define el número de calorías que se recetan diariamente para la terapia parenteral / enteral.",
        ]);
        Unit::create([
            "code" => "N10",
            "name" => "Libra pie por segundo",
            "description" => "Producto de la libra avoirdupois de acuerdo con el sistema de uncodeades avoirdupois y el pie de acuerdo con el sistema de uncodeades Anglo-Americano y el sistema imperial, divcodecodeo por la uncodead segundo del sistema interacional.",
            "simbol" => "lb·(ft/s)",
        ]);
        Unit::create([
            "code" => "N11",
            "name" => "Libra pulgada por segundo",
            "description" => "Producto de la libra avoirdupois de acuerdo con el sistema de uncodeades avoirdupois y la pulgada de acuerdo con el sistema de uncodeades Anglo-Americano y el sistema imperial, divcodecodeo por la uncodead segundo del sistema interacional.",
            "simbol" => "lb·(in/s)",
        ]);
        Unit::create([
            "code" => "N12",
            "name" => "Pferdestaerke",
            "description" => "Uncodead obsoleta de la potencia relativa a DIN 1301-3: 1979: 1 PS = 735.498 75 W.",
            "simbol" => "PS",
        ]);
        Unit::create([
            "code" => "N13",
            "name" => "Centímetro de mercurio (0°)",
            "description" => "Uncodead de presión no conforme al sistema internacional, en la cuál el valor de 1 cmHg cumple con la presión estática, que es generada por un mercurio a una temperatura de 0 ° C con una altura de 1 centímetro.",
            "simbol" => "cmHg (0 ºC)",
        ]);
        Unit::create([
            "code" => "N14",
            "name" => "Centímetro de agua (4°)",
            "description" => "Uncodead de presión no conforme al sistema internacional, en la cuál el valor de 1 cmH2O cumple con la presión estática, que es generada por una cabeza de agua a una temperatura de 4 ° C con una altura de 1 centímetro.",
            "simbol" => "cmH₂O (4 °C)",
        ]);
        Unit::create([
            "code" => "N15",
            "name" => "Pie de agua (39.2 °f)",
            "description" => "Uncodead de presión no conforme al sistema internacional, de acuerdo con el sistema Anglo-Americano e Imperial para uncodeades, mientras que el valor de 1 ft H2O es equivalente a la presión estática, que es generada por una cabeza de agua a una temperatura de 39,2 ° F con una Altura de 1 pie.",
            "simbol" => "ftH₂O (39,2 ºF)",
        ]);
        Unit::create([
            "code" => "N16",
            "name" => "Pulgada de mercurio (32 °f)",
            "description" => "Uncodead de presión no conforme al sistema internacional, de acuerdo con el sistema Anglo-American e Imperial para uncodeades, mientras que el valor de 1 inHg cumple con la presión estática, que es generada por un mercurio a una temperatura de 32 ° F con una altura de 1 pulgada.",
            "simbol" => "inHG (32 ºF)",
        ]);
        Unit::create([
            "code" => "N17",
            "name" => "Pulgada de mercurio (60 °f)",
            "description" => "Uncodead de presión no conforme al sistema internacional sino según al sistema Anglo-Americano e Imperial para uncodeades, mientras que el valor de 1 in Hg satisface la presión estática, que es generada por un mercurio a una temperatura de 60 ° F con una altura de 1 pulgada.",
            "simbol" => "inHg (60 ºF)",
        ]);
        Unit::create([
            "code" => "N18",
            "name" => "Pulgada de agua (39.2 °f)",
            "description" => "Uncodead de presión no conforme al sistema internacional sino de acuerdo con el sistema Anglo-Americano e Imperial para uncodeades, mientras que el valor de 1 inH2O satisface la presión estática, que es generada por una cabeza de agua a una temperatura de 39,2 ° F con una altura De 1 pulgada.",
            "simbol" => "inH₂O (39,2 ºF)",
        ]);
        Unit::create([
            "code" => "N19",
            "name" => "Pulgada de agua (60 °f)",
            "description" => "Uncodead de presión no conforme al sistema internacional sino según al sistema Anglo-Americano e Imperial para uncodeades, mientras que el valor de 1 inH2O satisface la presión estática, que es generada por una cabeza de agua a una temperatura de 60 ° F con una altura de 1 pulgada.",
            "simbol" => "inH₂O (60 ºF)",
        ]);
        Unit::create([
            "code" => "N2",
            "name" => "número de líneas",
        ]);
        Unit::create([
            "code" => "N20",
            "name" => "Kip por pulgada cuadrada",
            "description" => "Uncodead de presión no conforme al sistema internacional de uncodeades sino de acuerdo con el sistema Anglo-Americano de uncodeades como el 1000 veces de la uncodead de fuerza de libra fuerza divcodecodea por la potencia de la uncodead de pulgada por el exponente 2.",
            "simbol" => "ksi",
        ]);
        Unit::create([
            "code" => "N21",
            "name" => "Poundal por pie cuadrado",
            "description" => "Uncodead de presión no conforme al sistema internacional según el sistema Imperial de uncodeades según NIST: 1 pdl / ft² = 1,488 164 Pa.",
            "simbol" => "pdl/ft²",
        ]);
        Unit::create([
            "code" => "N22",
            "name" => "Onza (avoirdupois) por pulgada cuadrada",
            "description" => "Uncodead de la masa específica de la superficie (onza de avoirdupois según el sistema del avoirdupois de uncodeades según la superficie pulgada cuadrada según el sistema Anglo-Americano e imperial de uncodeades).",
            "simbol" => "oz/in²",
        ]);
        Unit::create([
            "code" => "N23",
            "name" => "Metro convencional de agua",
            "description" => "No es una uncodead de presión del sistema internacional, mientras que un valor de 1 mH2O es equivalente a la presión estática, que es produccodea por una columna de agua de un metro de alto.",
            "simbol" => "mH₂O",
        ]);
        Unit::create([
            "code" => "N24",
            "name" => "Gramo por milímetro cuadrado",
            "description" => "0.001 veces el kilo de uncodead de basedel sistema internacional divcodecodeo por el 0,000 001 veces de la potencia del medcodeor de uncodead de base del sistema internacional por el exponente 2.",
            "simbol" => "g/mm²",
        ]);
        Unit::create([
            "code" => "N25",
            "name" => "Libra por yarda cuadrada",
            "description" => "Uncodead para la masa relacionada con el área como una uncodead de la libra según el sistema de la uncodead del avoirdupois divcodecodeo por la potencia del patio de la uncodead según el sistema Anglo-Americano e imperial de uncodeades con el exponente 2.",
            "simbol" => "lb/yd²",
        ]);
        Unit::create([
            "code" => "N26",
            "name" => "Poundal por pulgada cuadrada",
            "description" => "Uncodead de presión no conforme al sistema internacional sino según el sistema Imperial de uncodeades (poundal por pulgada cuadrada).",
            "simbol" => "pdl/in²",
        ]);
        Unit::create([
            "code" => "N27",
            "name" => "Pie a la cuarta potencia ",
            "description" => "Potencia de la uncodead pie, de acuerdo con el sistema Anglo-Americano e Imperial de uncodeades, elevado al exponente 4 de acuerdo con NIST: 1 ft4 = 8,630 975 m4.",
            "simbol" => "ft⁴",
        ]);
        Unit::create([
            "code" => "N28",
            "name" => "Decímetro cúbico por kilogramo",
            "description" => "0.001 veces de metro, uncodead base  del sistema internacional elevado al exponente 3 divcodecodeo por el kilogramo.",
            "simbol" => "dm³/kg",
        ]);
        Unit::create([
            "code" => "N29",
            "name" => "Pie cúbico por libra ",
            "description" => "Potencia del pie, uncodead de acuerdo con el sistema de uncodeades Anglo-Americanas e Imperial elevado al exponente 3 divcodecodeo por la libra de la uncodead avoirdupois según el sistema unitario avoirdupois.",
            "simbol" => "ft³/lb",
        ]);
        Unit::create([
            "code" => "N3",
            "name" => "Impresión de punto",
        ]);
        Unit::create([
            "code" => "N30",
            "name" => "Pulgada cúbica por libra",
            "description" => "Potencia de la uncodead pulgada según el sistema Anglo-Americano e Imperial de uncodeades elevado al exponente 3 divcodecodeo por la libra avoirdupois según el sistema unitario avoirdupois.",
            "simbol" => "in³/lb",
        ]);
        Unit::create([
            "code" => "N31",
            "name" => "Kilonewton por metro",
            "description" => "1000 veces de la uncodead derivada newton divcodecodeo por el metro, ambas uncodeades del sistema internacional.",
            "simbol" => "kN/m",
        ]);
        Unit::create([
            "code" => "N32",
            "name" => "Poundal por pulgada",
            "description" => "Uncodead de tensión superficial de acuerdo con el sistema de uncodead Imperial como cociente de poundal por pulgada.",
            "simbol" => "pdl/in",
        ]);
        Unit::create([
            "code" => "N33",
            "name" => "Libra-fuerza por yarda",
            "description" => "Uncodead de fuerza por uncodead de longitud basado en el sistema Anglo-Americano de uncodeades.",
            "simbol" => "lbf/yd",
        ]);
        Unit::create([
            "code" => "N34",
            "name" => "Poundal segundo por pie cuadrado",
            "description" => "Uncodead de viscoscodead no conforme al sistema internacional.",
            "simbol" => "(pdl/ft²)·s",
        ]);
        Unit::create([
            "code" => "N35",
            "name" => "Poise por pascal",
            "description" => "CGS (Centímetro-Gramo-Segundo sistema) uncodead poise divcodecodeo por la uncodead derivada del sistema internacional, pascal.",
            "simbol" => "P/Pa",
        ]);
        Unit::create([
            "code" => "N36",
            "name" => "Newton segundo por metro cuadrado",
            "description" => "Uncodead de la viscoscodead dinámica como un producto de la uncodead de la presión (newton por metro cuadrado) multiplicado con la uncodead de base SI segundo.",
            "simbol" => "(N/m²)·s",
        ]);
        Unit::create([
            "code" => "N37",
            "name" => "Kilogramo por metro segundo",
            "description" => "Uncodead de la viscoscodead dinámica como un cociente de la uncodead kilogramo del sistema internacional entre la uncodead metro y por segundo del sistema internacional de uncodeades.",
            "simbol" => "kg/(m·s)",
        ]);
        Unit::create([
            "code" => "N38",
            "name" => "Kilogramo por metro minuto",
            "description" => "Uncodead de la viscoscodead dinámica como un cociente de la uncodead kilogramo del sistema internacional entre la uncodead metro y por minuto del sistema internacional de uncodeades.",
            "simbol" => "kg/(m·min)",
        ]);
        Unit::create([
            "code" => "N39",
            "name" => "Kilogramo por metro día",
            "description" => "Uncodead de la viscoscodead dinámica como un cociente de uncodead base kilogramo divcodecodeo por la uncodead base metro y por la uncodead de día, ambas del sistema internacional. ",
            "simbol" => "kg/(m·d)",
        ]);
        Unit::create([
            "code" => "N40",
            "name" => "Kilogramo por metro hora",
            "description" => "Uncodead de la viscoscodead dinámica como cociente de la uncodead base kilogramo divcodecodeo por la uncodead base metro y por uncodead de hora, ambas del sistema internacional.",
            "simbol" => "kg/(m·h)",
        ]);
        Unit::create([
            "code" => "N41",
            "name" => "Gramo por centímetro segundo",
            "description" => "Uncodead de la viscoscodead dinámica como un cociente del 0,001 veces de la uncodead base kilogramo divcodecodeo por el 0,01 veces de la uncodead base metro y la uncodead base segundo, del sistema internacional de uncodeades.",
            "simbol" => "g/(cm·s)",
        ]);
        Unit::create([
            "code" => "N42",
            "name" => "Poundal segundo por pulgada cuadrada",
            "description" => "Uncodead de viscoscodead dinámica no conforme al sistema internacional sino según el sistema Imperial de uncodeades, como producto de la  uncodead de presión (poundal por pulgada cuadrada) multiplicada por la uncodead base segundo, del sistema internacional de uncodeades.",
            "simbol" => "(pdl/in²)·s",
        ]);
        Unit::create([
            "code" => "N43",
            "name" => "Libra por pie minuto",
            "description" => "Uncodead de la viscoscodead dinámica según el sistema Anglo-Americano de uncodeades.",
            "simbol" => "lb/(ft·min)",
        ]);
        Unit::create([
            "code" => "N44",
            "name" => "Libra por pie día",
            "description" => "Uncodead de la viscoscodead dinámica según el sistema Anglo-Americano de uncodeades.",
            "simbol" => "lb/(ft·d)",
        ]);
        Unit::create([
            "code" => "N45",
            "name" => "Metro cúbico por segundo pascal",
            "description" => "Potencia de la uncodead metro del sistema internacional por el exponente 3 divcodecodeo por el producto de la uncodead base segundo y la uncodead derivada pascal, ambas del sistema internacional de uncodeades.",
            "simbol" => "(m³/s)/Pa",
        ]);
        Unit::create([
            "code" => "N46",
            "name" => "Pie poundal",
            "description" => "Uncodead de trabajo (trayectoria de fuerza)",
            "simbol" => "ft·pdl",
        ]);
        Unit::create([
            "code" => "N47",
            "name" => "Pulgada poundal",
            "description" => "Uncodead de trabajo (fuerza multiplicado por trayectoria) de acuerdo con el sistema imperial de uncodeades como el producto de la uncodead pulgada multiplicada por el poundal.",
            "simbol" => "in·pdl",
        ]);
        Unit::create([
            "code" => "N48",
            "name" => "Watt por centímetro cuadrado",
            "description" => "Uncodead derivada del sistema internacional, watt, divcodecodeo por la potencia de la 0.01 parte de la uncodead base del sistema internacional, metro al exponente 2.",
            "simbol" => "W/cm²",
        ]);
        Unit::create([
            "code" => "N49",
            "name" => "Watt por pulgada cuadrada",
            "description" => "Uncodead derivada del sistema internacional, watt, divcodecodeo por la potencia de la uncodead pulgada al exponente 2, de acuerdo al sistema de uncodeades Anglo-Americano y el sistema imperial de uncodeades.",
            "simbol" => "W/in²",
        ]);
        Unit::create([
            "code" => "N50",
            "name" => "Uncodead térmica británica (tabla internacional) por pie cuadrado hora.",
            "description" => "Uncodead del flujo superficial de calor según el sistema Imperial de uncodeades.",
            "simbol" => "BtuIT/(ft²·h)",
        ]);
        Unit::create([
            "code" => "N51",
            "name" => "Uncodead térmica británica (termoquímica) por pie cuadrado hora.",
            "description" => "Uncodead del flujo superficial de calor según el sistema Imperial de uncodeades.",
            "simbol" => "Btuth/(ft²·h)",
        ]);
        Unit::create([
            "code" => "N52",
            "name" => "Uncodead térmica británica (termoquímico) por pie cuadrado minuto.",
            "description" => "Uncodead del flujo superficial de calor según el sistema Imperial de uncodeades.",
            "simbol" => "Btuth/(ft²·min) ",
        ]);
        Unit::create([
            "code" => "N53",
            "name" => "Uncodead térmica británica (tabla internacional) por pie cuadrado segundo.",
            "description" => "Uncodead del flujo superficial de calor según el sistema Imperial de uncodeades.",
            "simbol" => "BtuIT/(ft²·s)",
        ]);
        Unit::create([
            "code" => "N54",
            "name" => "Uncodead térmica británica (termoquímica) por pie cuadrado segundo.",
            "description" => "Uncodead del flujo superficial de calor según el sistema Imperial de uncodeades.",
            "simbol" => "Btuth/(ft²·s)",
        ]);
        Unit::create([
            "code" => "N55",
            "name" => "Uncodead térmica británica (tabla internacional) por pulgada cuadrada segundo.",
            "description" => "Uncodead del flujo superficial de calor según el sistema Imperial de uncodeades.",
            "simbol" => "BtuIT/(in²·s)",
        ]);
        Unit::create([
            "code" => "N56",
            "name" => "Caloría (termoquímica) por centímetro cuadrado minuto",
            "description" => "Uncodead del flujo superficial de calor según el sistema Imperial de uncodeades.",
            "simbol" => "calth/(cm²·min)",
        ]);
        Unit::create([
            "code" => "N57",
            "name" => "Caloría (termoquímica) por centímetro cuadrado segundo",
            "description" => "Uncodead del flujo superficial de calor según el sistema Imperial de uncodeades.",
            "simbol" => "calth/(cm²·s)",
        ]);
        Unit::create([
            "code" => "N58",
            "name" => "Uncodead térmica británica (tabla internacional) por pie cúbico",
            "description" => "Uncodead de la denscodead de energía según el sistema Imperial de uncodeades.",
            "simbol" => "BtuIT/ft³",
        ]);
        Unit::create([
            "code" => "N59",
            "name" => "Uncodead térmica británica (termoquímica) por pie cúbico",
            "description" => "Uncodead de la denscodead de energía según el sistema Imperial de uncodeades.",
            "simbol" => "Btuth/ft³",
        ]);
        Unit::create([
            "code" => "N60",
            "name" => "Uncodead térmica británica (tabla internacional) por grado fahrenheit",
            "description" => "Uncodead de la capaccodead calorífica según el sistema Imperial de uncodeades.",
            "simbol" => "BtuIT/ºF",
        ]);
        Unit::create([
            "code" => "N61",
            "name" => "Uncodead térmica británica (termoquímico) por grado fahrenheit",
            "description" => "Uncodead de la capaccodead calorífica según el sistema Imperial de uncodeades.",
            "simbol" => "Btuth/ºF",
        ]);
        Unit::create([
            "code" => "N62",
            "name" => "Uncodead térmica británica (tabla internacional) por grado rankine",
            "description" => "Uncodead de la capaccodead calorífica según el sistema Imperial de uncodeades.",
            "simbol" => "BtuIT/ºR",
        ]);
        Unit::create([
            "code" => "N63",
            "name" => "Uncodead térmica británica (termoquímico) por grado rankine",
            "description" => "Uncodead de la capaccodead calorífica según el sistema Imperial de uncodeades.",
            "simbol" => "Btuth/ºR",
        ]);
        Unit::create([
            "code" => "N64",
            "name" => "Uncodead térmica británica (termoquímico) por libra grado rankine",
            "description" => "Uncodead de la capaccodead calorífica (uncodead térmica británica según la tabla internacional según el grado de Rankine) de acuerdo con el sistema Imperial de uncodeades divcodecodeo por la uncodead avoirdupois libra según el sistema de avoirdupois de uncodeades.",
            "simbol" => "(Btuth/°R)/lb",
        ]);
        Unit::create([
            "code" => "N65",
            "name" => "Kilocaloría (tabla internacional) por gramo kelvin",
            "description" => "Uncodead de la capaccodead calorífica relacionada con la masa como cociente 1000 veces de la caloría (tabla internacional) divcodecodeo por el producto de 0,001 veces de las uncodeades de base kilogramo y kelvin.",
            "simbol" => "(kcalIT/K)/g",
        ]);
        Unit::create([
            "code" => "N66",
            "name" => "Uncodead térmica británica (39 °f)",
            "description" => "Uncodead de energía térmica según el sistema Imperial de uncodeades en una temperatura de referencia de 39 ° F.",
            "simbol" => "Btu (39 ºF) ",
        ]);
        Unit::create([
            "code" => "N67",
            "name" => "Uncodead térmica británica (59 °f)",
            "description" => "Uncodead de energía térmica según el sistema Imperial de uncodeades en una temperatura de referencia de 59 ° F.",
            "simbol" => "Btu (59 ºF)",
        ]);
        Unit::create([
            "code" => "N68",
            "name" => "Uncodead térmica británica (60 °f)",
            "description" => "Uncodead de energía térmica según el sistema Imperial de uncodeades en una temperatura de referencia de 60 ° F.",
            "simbol" => "Btu (60 ºF) ",
        ]);
        Unit::create([
            "code" => "N69",
            "name" => "Caloría (20 °c)",
            "description" => "Uncodead para la cantcodead de calor, que se requiere para que 1g de agua libre de aire a una presión constante de 101.325 kPa, se caliente a la presión de la atmósfera estándar a nivel del mar, de 19,5 ° C a 20,5 ° C.",
            "simbol" => "cal₂₀",
        ]);
        Unit::create([
            "code" => "N70",
            "name" => "Quad",
            "description" => "Uncodead de energía de acuerdo al sistema imperial de uncodeades",
            "simbol" => "quad",
        ]);
        Unit::create([
            "code" => "N71",
            "name" => "Termia (energía comercial)",
            "description" => "Uncodead de energía calorífica en uso comercial, dentro de Estados Uncodeos defincodea como: 1 thm (EC) = 100 000 BtuIT.",
            "simbol" => "thm (EC)",
        ]);
        Unit::create([
            "code" => "N72",
            "name" => "Termia (UEA)",
            "description" => "Uncodead de energía térmica en uso comercial.",
            "simbol" => "thm (US)",
        ]);
        Unit::create([
            "code" => "N73",
            "name" => "Uncodead térmica británica (termoquímica) por libra",
            "description" => "Uncodead de la energía calorífica según el sistema imperial de uncodeades divcodeió por la uncodead de la libra de avoirdupois según el sistema de avoirdupois de uncodeades.",
            "simbol" => "Btuth/lb",
        ]);
        Unit::create([
            "code" => "N74",
            "name" => "Uncodead térmica británica (tabla internacional) por hora pie cuadrado grado fahrenheit.",
            "description" => "Uncodead del coeficiente de transición térmica según el sistema Imperial de uncodeades.",
            "simbol" => "BtuIT/(h·ft²·ºF)",
        ]);
        Unit::create([
            "code" => "N75",
            "name" => "Uncodead térmica británica (termoquímico) por hora pie cuadrado grado farenheit.",
            "description" => "Uncodead del coeficiente de transición térmica según el sistema imperial de uncodeades.",
            "simbol" => "Btuth/(h·ft²·ºF)",
        ]);
        Unit::create([
            "code" => "N76",
            "name" => "Uncodead térmica británica (tabla internacional) por segundo pie cuadrado grado fahrenheit.",
            "description" => "Uncodead del coeficiente de transición térmica según el sistema imperial de uncodeades.",
            "simbol" => "BtuIT/(s·ft²·ºF)",
        ]);
        Unit::create([
            "code" => "N77",
            "name" => "Uncodead térmica británica (termoquímico) por segundo pie cuadrado grado fahrenheit.",
            "description" => "Uncodead del coeficiente de transición térmica según el sistema imperial de uncodeades.",
            "simbol" => "Btuth/(s·ft²·ºF) ",
        ]);
        Unit::create([
            "code" => "N78",
            "name" => "Kilowatt por metro cuadrado kelvin",
            "description" => "1000 veces la uncodead derivada watt, divcodecodea por el producto de la potencia de uncodead base, metro, por el exponente 2 y la uncodead base, kelvin, del sistema internacional de uncodeades.",
            "simbol" => "kW/(m²·K)",
        ]);
        Unit::create([
            "code" => "N79",
            "name" => "Kelvin por pascal",
            "description" => "Uncodead base del sistema internacional kelvin, divcodecodeo entre pascal, uncodead base del sistema internacional",
            "simbol" => "K/Pa",
        ]);
        Unit::create([
            "code" => "N80",
            "name" => "Watt por metro grado celsius",
            "description" => "Uncodead derivada del sistema internacional, watt, divcodecodeo por el producto de la uncodead base, metro, y la uncodead de temperatura grados Celsius.",
            "simbol" => "W/(m·°C)",
        ]);
        Unit::create([
            "code" => "N81",
            "name" => "Kilowatt por metro kelvin",
            "description" => "1000 veces de la uncodead derivada, watt, divcodecodeo por el producto de la uncodead de base metro y la uncodead base kelvin, ambas del sistema internacional.",
            "simbol" => "kW/(m·K)",
        ]);
        Unit::create([
            "code" => "N82",
            "name" => "Kilowatt por metro grado celsius",
            "description" => "1000 veces de la uncodead derivada, watt, divcodecodeo por el producto de la uncodead base metro y la uncodead de temperatura grados Celsius.",
            "simbol" => "kW/(m·°C)",
        ]);
        Unit::create([
            "code" => "N83",
            "name" => "Metro por grado celsius metro",
            "simbol" => "m/(°C·m)",
        ]);
        Unit::create([
            "code" => "N84",
            "name" => "Grado fahrenheit hora por uncodead térmica británica (tabla internacional)",
            "description" => "Uncodead no conforme al sistema internacional de uncodeades,de la resistencia térmica según el sistema Imperial de uncodeades.",
            "simbol" => "ºF/(BtuIT/h)",
        ]);
        Unit::create([
            "code" => "N85",
            "name" => "Grado fahrenheit hora por uncodead térmica británica (termoquímico)",
            "description" => "Uncodead no conforme al sistema internacional de uncodeades,de la resistencia térmica según el sistema Imperial de uncodeades.",
            "simbol" => "ºF/(Btuth/h)",
        ]);
        Unit::create([
            "code" => "N86",
            "name" => "Grado fahrenheit segundo por uncodead térmica británica (tabla internacional)",
            "description" => "Uncodead no conforme al sistema internacional de uncodeades,de la resistencia térmica según el sistema Imperial de uncodeades.",
            "simbol" => "ºF/(BtuIT/s)",
        ]);
        Unit::create([
            "code" => "N87",
            "name" => "Grago fahrenheit segundo por uncodead térmica británica (termoquímico)",
            "description" => "Uncodead no conforme al sistema internacional de uncodeades,de la resistencia térmica según el sistema Imperial de uncodeades.",
            "simbol" => "ºF/(Btuth/s)",
        ]);
        Unit::create([
            "code" => "N88",
            "name" => "Grado fahrenheit hora pie cuadrado por uncodead térmica británica (tabla internacional) pulgada",
            "description" => "Uncodead de resistencia térmica específica según el sistema Imperial de uncodeades",
            "simbol" => "ºF·h·ft²/(BtuIT·in)",
        ]);
        Unit::create([
            "code" => "N89",
            "name" => "Grado fahrenheit hora pie cuadrado por uncodead térmica británica (termoquímico) pulgada.",
            "description" => "Uncodead de resistencia térmica específica según el sistema Imperial de uncodeades",
            "simbol" => "ºF·h·ft²/(Btuth·in)",
        ]);
        Unit::create([
            "code" => "N90",
            "name" => "Kilofaradio",
            "description" => "1000 veces del faradio, uncodead derivada del sistema internacional",
            "simbol" => "kF",
        ]);
        Unit::create([
            "code" => "N91",
            "name" => "Joule recíproco",
            "simbol" => "1/J",
        ]);
        Unit::create([
            "code" => "N92",
            "name" => "Picosiemens",
            "description" => "0.000 000 000 001 veces de la uncodead derivada  siemens del sistema internacional de uncodeades.",
            "simbol" => "pS",
        ]);
        Unit::create([
            "code" => "N93",
            "name" => "Amperio por pascal",
            "description" => "Uncodead base amperio divcodecodeo por la uncodead derivada pascal.",
            "simbol" => "A/Pa",
        ]);
        Unit::create([
            "code" => "N94",
            "name" => "Franklin",
            "description" => "CGS (Centímetro-Gram-Segundo sistema) uncodead de la carga eléctrica, donde la carga asciende exactamente a 1 franklin donde la fuerza de 1 dina sobre una carga igual se realiza a una distancia de 1 cm.",
            "simbol" => "Fr",
        ]);
        Unit::create([
            "code" => "N95",
            "name" => "Amperio minuto",
            "description" => "Uncodead de carga eléctrica que define la cantcodead de carga acumulada por un flujo constante de un amperio por un minuto.",
            "simbol" => "A·min",
        ]);
        Unit::create([
            "code" => "N96",
            "name" => "Biot",
            "description" => "El número de Biot (Bi) es un número adimensional utilizado en cálculos de transmisión de calor. Su nombre hace honor al físico francés Jean Baptiste Biot (1774-1862) y relaciona la transferencia de calor por conducción dentro de un cuerpo y la transferencia de calor por convección en la superficie de dicho cuerpo. Biot en 1804, analizó la interacción entre la conducción en un sólcodeo y la convección en sus superficies.",
            "simbol" => "Bi",
        ]);
        Unit::create([
            "code" => "N97",
            "name" => "Gilbert",
            "description" => "CGS (Centímetro-Gram-Segundo sistema) uncodead de la fuerza magnetomotriz, que se define por el trabajo para aumentar el potencial magnético de un polo común positivo con 1 erg.",
            "simbol" => "Gi",
        ]);
        Unit::create([
            "code" => "N98",
            "name" => "Voltio por pascal",
            "description" => "Uncodead derivada del sistema internacional, voltio, divcodecodeo entre la uncodead derivada del sistema internacional, pascal.",
            "simbol" => "V/Pa",
        ]);
        Unit::create([
            "code" => "N99",
            "name" => "Picovoltio",
            "description" => "0.000 000 000 001 veces de la uncodead derivada del sistema internacional, voltio.",
            "simbol" => "pV",
        ]);
        Unit::create([
            "code" => "NA",
            "name" => "Miligramo por kilogramo",
            "simbol" => "mg/kg",
        ]);
        Unit::create([
            "code" => "NAR",
            "name" => "Número de artículos",
            "description" => "Uncodead de conteo que define el número de artículos ",
        ]);
        Unit::create([
            "code" => "NB",
            "name" => "barcaza",
        ]);
        Unit::create([
            "code" => "NBB",
            "name" => "Número de bobinas",
        ]);
        Unit::create([
            "code" => "NC",
            "name" => "Carro",
        ]);
        Unit::create([
            "code" => "NCL",
            "name" => "Número de celulas",
            "description" => "Uncodead de conteo que define el número de células (célula: un espacio cerrado o circunscrito, cavcodead o volumen)",
        ]);
        Unit::create([
            "code" => "ND",
            "name" => "Barril neto",
        ]);
        Unit::create([
            "code" => "NE",
            "name" => "Litro neto",
        ]);
        Unit::create([
            "code" => "NEW",
            "name" => "Newton",
            "simbol" => "N",
        ]);
        Unit::create([
            "code" => "NF",
            "name" => "Mensaje",
            "description" => "Uncodead de conteo que define el número de mensajes",
        ]);
        Unit::create([
            "code" => "NG",
            "name" => "Galón neto (us)",
        ]);
        Unit::create([
            "code" => "NH",
            "name" => "Hora del mensaje",
        ]);
        Unit::create([
            "code" => "NI",
            "name" => "Galón imperial neto",
        ]);
        Unit::create([
            "code" => "NIL",
            "name" => "Nil",
            "description" => "Uncodead de conteo que define el número de instancias de nada",
            "simbol" => "()",
        ]);
        Unit::create([
            "code" => "NIU",
            "name" => "Número de uncodeades internacionales",
            "description" => "Uncodead de conteo que define el número de uncodeades internacionales",
        ]);
        Unit::create([
            "code" => "NJ",
            "name" => "Número de pantallas",
        ]);
        Unit::create([
            "code" => "NL",
            "name" => "Carga",
            "description" => "Uncodead de volumen que define el número de cargas(carga: cantcodead de artículos transportados o procesados al mismo tiempo)",
        ]);
        Unit::create([
            "code" => "NM3",
            "name" => "Metro cúbico normalizado",
            "description" => "Metros cúbicos normalizados (temperatura 0 ° C y presión 101325 milibares)",
        ]);
        Unit::create([
            "code" => "NMI",
            "name" => "Milla náutica",
            "description" => "Es una uncodead de longitud empleada en navegación marítima y aérea.",
            "simbol" => "n mile",
        ]);
        Unit::create([
            "code" => "NMP",
            "name" => "Número de paquetes",
            "description" => "Uncodead que define el número de paquetes (paquetes: colección de objetos empaquetados)",
        ]);
        Unit::create([
            "code" => "NN",
            "name" => "tren",
        ]);
        Unit::create([
            "code" => "NPR",
            "name" => "Número de parejas",
            "description" => "Una uncodead de cuenta que define el número de pares (par: elemento descrito por dos).",
        ]);
        Unit::create([
            "code" => "NPT",
            "name" => "Número de partes",
            "description" => "Uncodead de conteo que define el número de partes (partes: componente de larga entcodead)",
        ]);
        Unit::create([
            "code" => "NQ",
            "name" => "Mho",
        ]);
        Unit::create([
            "code" => "NR",
            "name" => "Micromho",
        ]);
        Unit::create([
            "code" => "NT",
            "name" => "Tonelada neta",
            "description" => "Uncodead de masa equivalente a 2000 libras, ver (US). Convencion Internacional referencia sobre el arqueo de los busques",
        ]);
        Unit::create([
            "code" => "NTT",
            "name" => "Tonelada de registro neto",
            "description" => "Una uncodead de masa igual al total de las imágenes cúbicas después de las deducciones, donde 1 registro t es igual a 100 pies cúbicos. Véase el Convenio internacional sobre el arqueo de los buques.",
        ]);
        Unit::create([
            "code" => "NV",
            "name" => "vehículo",
        ]);
        Unit::create([
            "code" => "NY",
            "name" => "Libra por tonelada métrica al aire seco",
        ]);
        Unit::create([
            "code" => "NX",
            "name" => "Parte por mil",
            "description" => "Uncodead de proporcion igual a 10 Sínonimo: por milla",
            "simbol" => "‰",
        ]);
        Unit::create([
            "code" => "OA",
            "name" => "Panel",
            "description" => "Uncodeade de conteo que define el nUnit::create([umero de paneles ",
        ]);
        Unit::create([
            "code" => "ODE",
            "name" => "Equvalente de agotamiento del ozona",
            "description" => "Uncodead de masa que define el potencial de agotamiento del ozono en kilogramos de un producto en relación con el agotamiento calculado para la sustancia de referencia Triclorofluorometano (CFC-11).",
        ]);
        Unit::create([
            "code" => "Ohm",
            "name" => "Ohm",
            "description" => "es la resistencia eléctrica que existe entre dos puntos de un conductor cuando una diferencia de potencial constante de 1 volt aplicada entre estos dos puntos produce, en dicho conductor, una corriente de intenscodead 1 amperio, cuando no haya fuerza electromotriz en el conductor. ",
            "simbol" => "Ω",
        ]);
        Unit::create([
            "code" => "ON",
            "name" => "Onza por yarda cuadrada",
            "simbol" => "oz/yd²",
        ]);
        Unit::create([
            "code" => "ONZ",
            "name" => "Onza (avoirdupois)",
            "description" => "Es una uncodead de masa usada desde la Antigua Roma para pesar con mayor precisión las mercancías y otros artículos, especialmente si su peso era menor que una libra romana",
            "simbol" => "oz",
        ]);
        Unit::create([
            "code" => "OP",
            "name" => "Dos paquetes",
        ]);
        Unit::create([
            "code" => "OPM",
            "name" => "Oscilaciones por minuto",
            "description" => "número de variaciones, perturbaciones o fluctuación en el tiempo de un medio o sistema",
            "simbol" => "o/min",
        ]);
        Unit::create([
            "code" => "OT",
            "name" => "Hora extra",
            "description" => "Uncodead de tiempo que define el nUnit::create([umero de horas extras",
        ]);
        Unit::create([
            "code" => "OZ",
            "name" => "Onza AV",
            "description" => "Una uncodead de medcodea igual a 1/16 de una libra o aproximadamente 28.3495 gramos (av = avoirdupois). Use onza (código común ONZ).",
        ]);
        Unit::create([
            "code" => "OZA",
            "name" => "Onza líqucodea (estados uncodeos)",
            "simbol" => "fl oz (US)",
        ]);
        Unit::create([
            "code" => "OZI",
            "name" => "Onza líqucodea (UK)",
            "simbol" => "fl oz (UK)",
        ]);
        Unit::create([
            "code" => "P0",
            "name" => "Página electrónica",
        ]);
        Unit::create([
            "code" => "P1",
            "name" => "Tanto por ciento",
            "description" => "Uncodead de proporcion equivalente a 0.01",
            "simbol" => "% or pct",
        ]);
        Unit::create([
            "code" => "P10",
            "name" => "Culombio por metro",
            "description" => "Uncodead derivada, coulomb divcodecodea por la uncodead base, metro.",
            "simbol" => "C/m",
        ]);
        Unit::create([
            "code" => "P11",
            "name" => "Kiloweber",
            "description" => "1000 veces la uncodead derivada weber, del sistema internacional de uncodeades.",
            "simbol" => "kWb",
        ]);
        Unit::create([
            "code" => "P12",
            "name" => "Gamma",
            "description" => "Uncodead de denscodead de flujo magnético.",
            "simbol" => "γ",
        ]);
        Unit::create([
            "code" => "P13",
            "name" => "Kilotesla",
            "description" => "1000 veces la uncodead derivada tesla.",
            "simbol" => "kT",
        ]);
        Unit::create([
            "code" => "P14",
            "name" => "Joule por segundo",
            "description" => "Cociente de la uncodead derivada joule divcodecodeo entre la uncodead base, segundo, ambas del sistema internacional.",
            "simbol" => "J/s",
        ]);
        Unit::create([
            "code" => "P15",
            "name" => "Joule por minuto",
            "description" => "Cociente de la uncodead derivada, joule, divcodecodeo entre la uncodead minuto.",
            "simbol" => "J/min",
        ]);
        Unit::create([
            "code" => "P16",
            "name" => "Joule por hora",
            "description" => "Cociente de la uncodead derivada, joule, divcodecodeo entre la uncodead hora.",
            "simbol" => "J/h",
        ]);
        Unit::create([
            "code" => "P17",
            "name" => "Joule por día",
            "description" => "Cociente de la uncodead derivada, joule, divcodecodeo entre la uncodead día.",
            "simbol" => "J/d",
        ]);
        Unit::create([
            "code" => "P18",
            "name" => "Kilojoule por segundo",
            "description" => "Cociente entre 1000 veces de la uncodea derivada, joule, divcodecodeo por la uncodead base segundo.",
            "simbol" => "kJ/s",
        ]);
        Unit::create([
            "code" => "P19",
            "name" => "Kilojoule por minuto",
            "description" => "Cociente entre 1000 veces de la uncodea derivada, joule, divcodecodeo por la uncodead minuto.",
            "simbol" => "kJ/min",
        ]);
        Unit::create([
            "code" => "P2",
            "name" => "Libra por pie",
            "simbol" => "lb/ft",
        ]);
        Unit::create([
            "code" => "P20",
            "name" => "Kilojoule por hora",
            "description" => "Cociente entre 1000 veces de la uncodea derivada, joule, divcodecodeo por la uncodead hora.",
            "simbol" => "kJ/h",
        ]);
        Unit::create([
            "code" => "P21",
            "name" => "Kilojoule por dia",
            "description" => "Cociente entre 1000 veces de la uncodea derivada, joule, divcodecodeo por la uncodead día",
            "simbol" => "kJ/d",
        ]);
        Unit::create([
            "code" => "P22",
            "name" => "NanoOhm",
            "description" => "0.000 000 001 veces de la uncodead derivada Ohm.",
            "simbol" => "nΩ",
        ]);
        Unit::create([
            "code" => "P23",
            "name" => "Ohm circular-mil por pie",
            "description" => "Uncodead de resistivcodead.",
            "simbol" => "Ω·cmil/ft ",
        ]);
        Unit::create([
            "code" => "P24",
            "name" => "Kilohenry",
            "description" => "1000 veces la uncodead derivada, henry del sistema internacional.",
            "simbol" => "kH",
        ]);
        Unit::create([
            "code" => "P25",
            "name" => "Lumen por pie cuadrado",
            "description" => "Uncodead derivada, lumen divcodecodeo por la potencia de la uncodead pie, al exponente 2, de acuerdo con el sistema anglo-americano y el sistema imperial.",
            "simbol" => "lm/ft²",
        ]);
        Unit::create([
            "code" => "P26",
            "name" => "Foto",
            "description" => "es una uncodead de iluminancia  o flujo luminoso a través de un área. No es una uncodead del sistema internacional, sino que se asocia con el antiguo segundo sistema centímetro gramo de uncodeades .",
            "simbol" => "ph",
        ]);
        Unit::create([
            "code" => "P27",
            "name" => "Vela (medcodea)",
            "description" => "Es una uncodead de medcodea de iluminancia que no pertenece al Sistema Internacional de Uncodeades, pero es ampliamente usada en Estados Uncodeos para fotografía, cine, televisión, conservación luminosa, ingeniería de la construcción, etc. Una vela significa \"el reparto de iluminación sobre una superficie equivalente a una candela, y a un pie de distancia\".",
            "simbol" => "ftc",
        ]);
        Unit::create([
            "code" => "P28",
            "name" => "Candela por pulgada cuadrada",
            "description" => "Uncodead base, candela divcodecodeo por la potencia de la uncodead de pulgada al exponente 2 de acuerdo con el sistema de uncodeades Anglo-Americanas e Imperial.",
            "simbol" => "cd/in²",
        ]);
        Unit::create([
            "code" => "P29",
            "name" => "Footlambert",
            "description" => "Uncodead de luminancia de acuerdo con el sistema Anglo-Americano de uncodeades, y se define como la luminancia emitcodea o reflejada de un lumen por pie cuadrado.",
            "simbol" => "ftL",
        ]);
        Unit::create([
            "code" => "P3",
            "name" => "Tres paquetes",
        ]);
        Unit::create([
            "code" => "P30",
            "name" => "Lambert",
            "description" => "Uncodead de luminancia CGS (Centímetro-Gram-Segundo sistema), defincodea como la luminancia emitcodea o reflejada de un lumen por centímetro cuadrado.",
            "simbol" => "Lb",
        ]);
        Unit::create([
            "code" => "P31",
            "name" => "Stilb ",
            "description" => "Uncodead de luminancia CGS (Centímetro-Gram-Segundo sistema), defincodea como la luminancia emitcodea o reflejada de un lumen por centímetro cuadrado.",
            "simbol" => "sb",
        ]);
        Unit::create([
            "code" => "P32",
            "name" => "Candela por pie cuadrado",
            "description" => "Uncodead base, candela divcodecodeo por la potencia de la uncodead pie al exponente 2 , de acuerdo con el sistema anglo-americano y el sistema imperial de uncodeades ",
            "simbol" => "cd/ft²",
        ]);
        Unit::create([
            "code" => "P33",
            "name" => "Kilocandela",
            "description" => "1000 veces la uncodead base, candela, del sistema internacional.",
            "simbol" => "kcd",
        ]);
        Unit::create([
            "code" => "P34",
            "name" => "Milicandela",
            "description" => "0.001 veces la uncodead base , candela, del sistema internacional.",
            "simbol" => "mcd",
        ]);
        Unit::create([
            "code" => "P35",
            "name" => "Hefner-kerze",
            "description" => "Obsoleto, uncodead de potencia en Alemania relacionado con DIN 1301-3:1979: 1 HK = 0,903 candela.",
            "simbol" => "HK",
        ]);
        Unit::create([
            "code" => "P36",
            "name" => "Candela internacional",
            "description" => "Uncodead obsoleta de la potencia en Alemania relativa a DIN 1301-3: 1979: 1 HK = 1.019 candela.",
            "simbol" => "IK",
        ]);
        Unit::create([
            "code" => "P37",
            "name" => "Uncodead térmica británica (tabla internacional) por pie cuadrado",
            "description" => "Uncodead de la transmisión de energía relacionado de muestreo de áreas de acuerdo con el sistema imperial de uncodeades.",
            "simbol" => "BtuIT/ft²",
        ]);
        Unit::create([
            "code" => "P38",
            "name" => "Uncodead térmica británica (termoquímica) por pie cuadrado",
            "description" => "Uncodead de la transmisión de energía relacionado de muestreo de áreas de acuerdo con el sistema imperial de uncodeades.",
            "simbol" => "Btuth/ft²",
        ]);
        Unit::create([
            "code" => "P39",
            "name" => "Caloría (termoquímica) por centímetro cuadrado",
            "description" => "Uncodead de la transmisión de energía relacionado de muestreo de áreas de acuerdo con el sistema imperial de uncodeades.",
            "simbol" => "calth/cm²",
        ]);
        Unit::create([
            "code" => "P4",
            "name" => "paquete de cuatro",
        ]);
        Unit::create([
            "code" => "P40",
            "name" => "Langley",
            "description" => "CGS (Centímetro-Gramo-Segundo sistema) uncodead de la transmisión de energía relacionada con el área (como una medcodea de la cantcodead inccodeente de calor de la radiación solar en la superficie de la tierra).",
            "simbol" => "Ly",
        ]);
        Unit::create([
            "code" => "P41",
            "name" => "Década (logaritmica)",
            "description" => "Una escala logarítmica es una escala de medcodea que utiliza el logaritmo de una cantcodead física en lugar de la propia cantcodead.",
            "simbol" => "dec",
        ]);
        Unit::create([
            "code" => "P42",
            "name" => "Pascal por segundo cuadrado",
            "description" => "Uncodead del conjunto como un producto de la potencia de derivado uncodead pascal SI con exponente 2 y la uncodead base segunda SI.",
            "simbol" => "Pa²·s",
        ]);
        Unit::create([
            "code" => "P43",
            "name" => "Bel por metro",
            "description" => "Una uncodead Bel divcodecodea por la uncodead básica del sistema internacional (metros).",
            "simbol" => "B/m",
        ]);
        Unit::create([
            "code" => "P44",
            "name" => "Libra Mol",
            "description" => "Uncodead que no forma parte del sistema internacional, cantcodead de una sustancia relacionada que un mol libra de una composición química corresponde a la misma cantcodead de libras como el peso molcular de una molécula de esta composición en uncodeades de masa atómica.",
            "simbol" => "lbmol",
        ]);
        Unit::create([
            "code" => "P45",
            "name" => "Libra de Mol por segundo",
            "description" => "No forma parte del sistema internacional de uncodeades.\r\nUncodead de flujo del flujo molar que se refiere a que una libra mol de una composición química el mismo número de libras corresponde con el peso molcular de una molécula de esta composición en la masa atómica de uncodeades.",
            "simbol" => "lbmol/s",
        ]);
        Unit::create([
            "code" => "P46",
            "name" => "Libra Mol por minuto",
            "description" => "No forma parte del sistema internacional de uncodeades.\r\nUncodead de flujo del flujo molar que se refiere a que una libra mol de una composición química el mismo número de libras corresponde como el peso molcular de una molécula de esta composición en la masa atómica de uncodeades.",
            "simbol" => "lbmol/h",
        ]);
        Unit::create([
            "code" => "P47",
            "name" => "KiloMol por kilogramo",
            "description" => "1000 veces la división de la uncodead base mol por la base de la uncodead kilogramo.",
            "simbol" => "kmol/kg",
        ]);
        Unit::create([
            "code" => "P48",
            "name" => "Libra de Mol por libra",
            "description" => "Uncodead del flujo molar material divcodecodeo por la libra avoirdupois para la masa de acuerdo con el sistema de uncodeades avoirdupois no SI-conforme.",
            "simbol" => "lbmol/lb",
        ]);
        Unit::create([
            "code" => "P49",
            "name" => "Newton metro cuadrado por amperio",
            "description" => "Producto de la division de la uncodead Newton y la uncodead base metro \r\nProducto de la uncodead derivada newton y la potencia del medcodeor de la uncodead base con el exponente 2 divcodecodeo por el amperio de la uncodead base.",
            "simbol" => "N·m²/A",
        ]);
        Unit::create([
            "code" => "P5",
            "name" => "Paquete de cinco",
            "description" => "Uncodead de conteo que define el número de paquetes-cinco (paquete-cinco: set de cinco artículos empaquetados siempre)",
        ]);
        Unit::create([
            "code" => "P50",
            "name" => "Metro weber",
            "description" => "Producto de la división entre  la uncodead Weber y la uncodead Metro.",
            "simbol" => "Wb·m",
        ]);
        Unit::create([
            "code" => "P51",
            "name" => "Mol por kilogramo pascal ",
            "description" => "Uncodead base mol divcodecodeo por el producto de la uncodead base SI kilogramo y la uncodead derivada pascal SI. ",
            "simbol" => "(mol/kg)/Pa",
        ]);
        Unit::create([
            "code" => "P52",
            "name" => "Mol por metro cúbico pascal",
            "description" => "uncodead base mol divcodecodeo por el producto de la potencia de la uncodead base SI metros con exponente 3 y la uncodead derivada pascal SI.",
            "simbol" => "(mol/m³)/Pa",
        ]);
        Unit::create([
            "code" => "P53",
            "name" => "Unit por segundo",
            "description" => "Sistema CGS (Centímetro-Gram-Segundo sistema) para el flujo magnético de un polo magnético (según la interacción de polos codeénticos de 1 din a una distancia de un cm).",
            "simbol" => "unit pole ",
        ]);
        Unit::create([
            "code" => "P54",
            "name" => "MiliGray por segundo",
            "description" => "0.0001 veces de la uncodead derivada Gray divcodecodeo por la uncodead de base segundos.",
            "simbol" => "mGy/s",
        ]);
        Unit::create([
            "code" => "P55",
            "name" => "MicroGray por segundo",
            "description" => "0.000 001 veces de la uncodead derivada Gray divcodecodeo por la uncodead de base segundos.",
            "simbol" => "µGy/s",
        ]);
        Unit::create([
            "code" => "P56",
            "name" => "NanoGray por segundo",
            "description" => "0.000 000 001 veces de la uncodead derivada Gray divcodecodeo por la uncodead de base segundos.",
            "simbol" => "nGy/s",
        ]);
        Unit::create([
            "code" => "P57",
            "name" => "Gray por minuto",
            "description" => "Derivada del la uncodead Gray divcodecodea por la uncodead minutos.",
            "simbol" => "Gy/min",
        ]);
        Unit::create([
            "code" => "P58",
            "name" => "MiliGray por minuto",
            "description" => "0.001 veces de la uncodead derivada de Gray divcodecodea por la uncodead de minutos.",
            "simbol" => "mGy/min",
        ]);
        Unit::create([
            "code" => "P59",
            "name" => "Microgray por minuto",
            "description" => "0.000 001 veces de la uncodead derivada gris SI divcodecodeo por la uncodead de minutos.",
            "simbol" => "µGy/min",
        ]);
        Unit::create([
            "code" => "P6",
            "name" => "paquete de seis",
        ]);
        Unit::create([
            "code" => "P60",
            "name" => "Nanogray por minuto",
            "description" => "0.000 000 001 veces de la uncodead derivada gris SI divcodecodeo por la uncodead de minutos.",
            "simbol" => "nGy/min",
        ]);
        Unit::create([
            "code" => "P61",
            "name" => "Gray por hora",
            "description" => "Derivada de la uncodead Gray por la derivada de la uncodead hora.",
            "simbol" => "Gy/h",
        ]);
        Unit::create([
            "code" => "P62",
            "name" => "MiliGray por hora",
            "description" => "0.001 veces de la uncodead derivada Gray por la uncodead hora",
            "simbol" => "mGy/h",
        ]);
        Unit::create([
            "code" => "P63",
            "name" => "Micro gray por hora",
            "description" => "0.000 001 veces de la uncodead derivada gris SI divcodecodea por la hora uncodead.",
            "simbol" => "µGy/h",
        ]);
        Unit::create([
            "code" => "P64",
            "name" => "Nanogray por hora",
            "description" => "0.000 000 001 veces de la uncodead derivada gris SI divcodecodea por la hora uncodead.",
            "simbol" => "nGy/h",
        ]);
        Unit::create([
            "code" => "P65",
            "name" => "Sievert por segundo",
            "description" => "Derivada de la uncodead Sievert divcodecodea por la uncodead de base segundos.",
            "simbol" => "Sv/s",
        ]);
        Unit::create([
            "code" => "P66",
            "name" => "MilliSievert por segundo",
            "description" => "0.001 veces de la uncodead derivada Sievert divcodecodea por la uncodead de base segundos.",
            "simbol" => "mSv/s",
        ]);
        Unit::create([
            "code" => "P67",
            "name" => "MicroSievert por segundo",
            "description" => "0.000 001 veces de la uncodead derivada Sievert divcodecodeo por la uncodead de base segundos.",
            "simbol" => "µSv/s",
        ]);
        Unit::create([
            "code" => "P68",
            "name" => "NanoSievert por segundo",
            "description" => "0.000 000 001 veces de la uncodead derivada Sievert divcodecodeo por la uncodead de base segundos.",
            "simbol" => "nSv/s",
        ]);
        Unit::create([
            "code" => "P69",
            "name" => "Rem por segundo",
            "description" => "Uncodead para la tasa de estaño equivalente y relativa a DIN 1301-3: 1979: 1 rem / s = 0,01 J / (kg · s) = 1 Sv / s.",
            "simbol" => "rem/s",
        ]);
        Unit::create([
            "code" => "P7",
            "name" => "Paquete de siete",
        ]);
        Unit::create([
            "code" => "P70",
            "name" => "Sievert por hora",
            "description" => "Derivado uncodead Sievert divcodecodea por la hora uncodead.",
            "simbol" => "Sv/h",
        ]);
        Unit::create([
            "code" => "P71",
            "name" => "MilliSievert por hora",
            "description" => "0.001 veces de la uncodead derivada Sievert SI divcodecodea por la uncodead hora.",
            "simbol" => "mSv/h",
        ]);
        Unit::create([
            "code" => "P72",
            "name" => "Micro Sievert por hora",
            "description" => "0.000 001 veces de la uncodead derivada Sievert divcodecodea por la uncodead hora.",
            "simbol" => "µSv/h",
        ]);
        Unit::create([
            "code" => "P73",
            "name" => "NanoSievert por hora",
            "description" => "0.000 000 001 veces de la uncodead derivada Sievert divcodecodea por la uncodead hora.",
            "simbol" => "nSv/h",
        ]);
        Unit::create([
            "code" => "P74",
            "name" => "Sievert por minuto",
            "description" => "Derivado uncodead Sievert divcodecodeo por la uncodead minuto.",
            "simbol" => "Sv/min",
        ]);
        Unit::create([
            "code" => "P75",
            "name" => "MilliSievert por minuto",
            "description" => "0.001 veces de la uncodead derivada Sievert divcodecodeo por la uncodead de minutos.",
            "simbol" => "mSv/min",
        ]);
        Unit::create([
            "code" => "P76",
            "name" => "MicroSievert por minuto",
            "description" => "0.000 001 veces de la uncodead derivada Sievert divcodecodeo por la uncodead de minutos.",
            "simbol" => "µSv/min",
        ]);
        Unit::create([
            "code" => "P77",
            "name" => "NanoSievert pominut ",
            "description" => "0.000 000 001 veces de la uncodead derivada Sievert divcodecodeo por la uncodead de minutos.",
            "simbol" => "nSv/min",
        ]);
        Unit::create([
            "code" => "P78",
            "name" => "Reciproccodead por segundo",
            "description" => "Complemento de la potencia de la uncodead pulgada según el sistema Anglo-Americano e Imperial de uncodeades por exponente 2.",
            "simbol" => "1/in²",
        ]);
        Unit::create([
            "code" => "P79",
            "name" => "Pascal metro cuadrado por kilogramo",
            "description" => " Uncodead del índice de estallcodeo como uncodead derivada para pascal presión relacionada con la sustancia, representado como cociente de la uncodead base SI kilogramo divcodecodea por la potencia de la uncodead base SI metros por exponente 2.",
            "simbol" => "Pa/(kg/m²)",
        ]);
        Unit::create([
            "code" => "P8",
            "name" => "Paquete de ocho",
        ]);
        Unit::create([
            "code" => "P80",
            "name" => "Milipascal por metro.",
            "description" => " 0.001 veces de la uncodead derivada pascal divcodecodeo por la uncodead de base metros.",
            "simbol" => "mPa/m",
        ]);
        Unit::create([
            "code" => "P81",
            "name" => "Kilopascal por metro.",
            "description" => "1000 veces de la uncodead derivada pascal divcodecodeo por la uncodead de base metros.",
            "simbol" => "kPa/m",
        ]);
        Unit::create([
            "code" => "P82",
            "name" => "Hectopascal por metro.",
            "description" => "100 veces de la uncodead derivada pascal SI divcodecodeo por la uncodead de base metros. ",
            "simbol" => "hPa/m",
        ]);
        Unit::create([
            "code" => "P83",
            "name" => "Admosfera estandar por metro.",
            "description" => "Uncodead anticuadas de la presión divcodecodea por la uncodead de base metros.",
            "simbol" => "Atm/m",
        ]);
        Unit::create([
            "code" => "P84",
            "name" => "Admosfera tecnica por metro.",
            "description" => "uncodead obsoleta y no legal de la presión que se genera por una columna de agua de 10 metros divcodecodea por la uncodead de base metros.",
            "simbol" => "at/m",
        ]);
        Unit::create([
            "code" => "P85",
            "name" => "Torr por metro.",
            "description" => "Uncodead de la presión divcodecodea por la uncodead de base metros.",
            "simbol" => "Torr/m",
        ]);
        Unit::create([
            "code" => "P86",
            "name" => "Psi por pulgada",
            "description" => "Uncodead de compuesto para la presión (libra de fuerza de acuerdo con el sistema de la uncodead angloamericana divcodecodea por la potencia de la uncodead de pulgada de acuerdo con el sistema angloamericano e Imperial de uncodeades con el exponente 2) divcodecodeo por la uncodead de pulgada de acuerdo con la sistema angloamericano e Imperial de uncodeades.",
            "simbol" => "psi/in",
        ]);
        Unit::create([
            "code" => "P87",
            "name" => "Metro cúbico por segundo de metro cuadrado",
            "description" => "Uncodead de volumen de flujo metros cúbicos por segundo relacionado con la superficie de transmisión en metros cuadrados.",
            "simbol" => "(m³/s)/m²",
        ]);
        Unit::create([
            "code" => "P88",
            "name" => "Rhe",
            "description" => "Uncodead no conforme a SI de flucodeez de viscoscodead dinámica",
            "simbol" => "rhe",
        ]);
        Unit::create([
            "code" => "P89",
            "name" => "Libra por metro cúbico de pulgada",
            "description" => "Uncodead para el momento de rotación relacionado con la longitud según el sistema de uncodeades Anglo-Americanas e Imperial.",
            "simbol" => "lbf·ft/in",
        ]);
        Unit::create([
            "code" => "P9",
            "name" => "Nueve paquetes",
        ]);
        Unit::create([
            "code" => "P90",
            "name" => "Libra-fuerza por pulgada cuadrada",
            "description" => "Uncodead para el momento de rotación relacionado con la longitud según el sistema de uncodeades Anglo-Americanas e Imperial.",
            "simbol" => "lbf·in/in",
        ]);
        Unit::create([
            "code" => "P91",
            "name" => "Permanente (0°c)",
            "description" => "Uncodead tradicional para la capaccodead de un material para permitir la transición del vapor, defincodea a una temperatura de 0°C como transmitancia del vapor en la cual la masa de un grano de vapor penetra en un área de un pie cuadrado a una presión de mercurio de una pulgada por hora.",
            "simbol" => "perm (0 ºC) ",
        ]);
        Unit::create([
            "code" => "P92",
            "name" => "Permanente (23°c)",
            "description" => "Uncodead tradicional para la capaccodead de un material para permitir la transición del vapor, defincodea a una temperatura de 23°C como transmitancia del vapor en la cual la masa de un grano de vapor penetra en un área de un pie cuadrado a una presión de mercurio de una pulgada por hora.",
            "simbol" => "perm (23 ºC) ",
        ]);
        Unit::create([
            "code" => "P93",
            "name" => "Byte por segundo",
            "description" => "Son utilizados para expresar la veloccodead de transmisión de datos o bit rate. Con frecuencia se usa en forma ambigua como bps, que para el SI significaría \"bits por segundos\"",
            "simbol" => "byte/s",
        ]);
        Unit::create([
            "code" => "P94",
            "name" => "Kilobyte por segundo",
            "description" => "1000-veces la uncodead de byte divcodecodea por la uncodead de base SI en segundo lugar.",
            "simbol" => "kbyte/s",
        ]);
        Unit::create([
            "code" => "P95",
            "name" => "Megabite por segundo",
            "description" => "1 000 000 veces de la uncodead de byte divcodecodea por la uncodead base SI segunda",
            "simbol" => "Mbyte/s",
        ]);
        Unit::create([
            "code" => "P96",
            "name" => "Recíproco de la uncodead si deriva voltio",
            "description" => "Recíproco de la uncodead SI deriva voltio",
            "simbol" => "1/V",
        ]);
        Unit::create([
            "code" => "P97",
            "name" => "Reciproccodead de Radian",
            "description" => "Recíproco de la uncodead radian",
            "simbol" => "1/rad",
        ]);
        Unit::create([
            "code" => "P98",
            "name" => "Pascal a la suma de potencia de los números estequimetricos",
            "description" => "Uncodead de la constante de equilibrio sobre la base de la presión (ISO 80000-9: 2009, 9-35.a).",
            "simbol" => "PaΣνB",
        ]);
        Unit::create([
            "code" => "P99",
            "name" => "Mols por metro cúbico a la suma de potencia de los números estequimetricos",
            "description" => "Uncodead de la constante de equilibrio sobre la base de la concentración (ISO 80000-9: 2009, 9-36.a).",
            "simbol" => "(mol/m³)∑νB",
        ]);
        Unit::create([
            "code" => "PAL",
            "name" => "Pascal",
            "description" => "Es la presión uniforme que, actuando sobre una superficie plana de 1 metro cuadrado, ejerce perpendicularmente a esta superficie una fuerza total de 1 newton. ",
            "simbol" => "Pa",
        ]);
        Unit::create([
            "code" => "PB",
            "name" => "Par de la pulgada",
        ]);
        Unit::create([
            "code" => "PD",
            "name" => "Almohadilla",
            "description" => "Uncodead de conteo que define el número de almohadillas (almohadilla: bloquea de hojas de papel sujetas juntas en un extremo).",
        ]);
        Unit::create([
            "code" => "PE",
            "name" => "Libra equivalente",
        ]);
        Unit::create([
            "code" => "PFL",
            "name" => "Litro de prueba ",
            "description" => "Uncodead de volumen igual a un litro de alcoholes de prueba, o su equivalente alcohólico. Se utiliza para medir la concentración de licores alcohólicos destilados, expresada como porcentaje del contencodeo en alcohol de una mezcla patrón a una tempreatura específica.",
        ]);
        Unit::create([
            "code" => "PGL",
            "name" => "Galón de prueba",
            "description" => "Uncodead de volumen igual a un galón de alcoholes de prueba, o su equivalente alcohólico. Se utiliza para medir la concentración de licores alcohólicos destilados, expresada como porcentaje del contencodeo en alcohol de una mezcla patrón a una temperatura específica.",
        ]);
        Unit::create([
            "code" => "PI",
            "name" => "Tono",
            "description" => "Uncodeade de conteo que define el número de caracteres que se ajustan en una pulgada horizontal",
        ]);
        Unit::create([
            "code" => "PLA",
            "name" => "Grado de platón ",
            "description" => "Uncodead de proporción que define el contencodeo de azúcar de un producto, especialmente en relación con la cerveza",
            "simbol" => "°P",
        ]);
        Unit::create([
            "code" => "PM",
            "name" => "Porcentaje de libra",
        ]);
        Unit::create([
            "code" => "PO",
            "name" => "Libra por pulgada",
            "simbol" => "lb/in",
        ]);
        Unit::create([
            "code" => "PQ",
            "name" => "Página por pulgada",
            "description" => "Uncodead de cantcodead que define el grado de espesor de una publicación enlazada, expresada como el número de de páginas por pulgada de espesor.",
            "simbol" => "ppi",
        ]);
        Unit::create([
            "code" => "PR",
            "name" => "Par",
            "description" => "Uncodead de conteo que define el número de pares (par: descripción por 2)",
        ]);
        Unit::create([
            "code" => "PS",
            "name" => "Libra fuerza por pulgada cuadrada",
            "simbol" => "lbf/in²",
        ]);
        Unit::create([
            "code" => "PT",
            "name" => "Pinta (US)",
            "description" => "Utilice pinta líqucodea (código común PTL)",
            "simbol" => "Pt (US)",
        ]);
        Unit::create([
            "code" => "PTD",
            "name" => "Pinta seca (estados uncodeos)",
            "simbol" => "dry pt (US)",
        ]);
        Unit::create([
            "code" => "PTI",
            "name" => "Pint (uk)",
            "description" => "Es una uncodead de volumen inglesa en el sistema imperial y los Estados Uncodeos. La versión imperial usada en el UK es de 20 onzas líqucodeas y es equivalente a 568,26125 ml, mientras que en los EUA es de 16 onzas líqucodeas y es equivalente a 473,17647 ml.",
            "simbol" => "pt (UK)",
        ]);
        Unit::create([
            "code" => "PTL",
            "name" => "Pinta líqucodea (estados uncodeos)",
            "simbol" => "liq pt (US)",
        ]);
        Unit::create([
            "code" => "PTN",
            "name" => "Parte",
            "description" => "Cantcodead de alimentos asignados o suficientes para una persona ",
            "simbol" => "PTN",
        ]);
        Unit::create([
            "code" => "PV",
            "name" => "Media pinta (US)",
        ]);
        Unit::create([
            "code" => "PW",
            "name" => "Libra por pulgada de ancho",
        ]);
        Unit::create([
            "code" => "PY",
            "name" => "Pico seco (EUA)",
        ]);
        Unit::create([
            "code" => "PZ",
            "name" => "Peck dry (UK)",
        ]);
        Unit::create([
            "code" => "Q10",
            "name" => "Joule por tesla",
            "description" => "Uncodead del momento dipolar magnético de la molécula como derivado de la uncodead SI joule divcodecodeo por la uncodead SI derivada Tesla",
            "simbol" => "J/T",
        ]);
        Unit::create([
            "code" => "Q11",
            "name" => "Erlang",
            "description" => "Uncodead del valor del mercado de acuerdo con la caracteristica de una sola característica como una medición estadística de la utilización existente ",
            "simbol" => "E",
        ]);
        Unit::create([
            "code" => "Q12",
            "name" => "Octeto",
            "description" => "Sinónimo por byte: 1octet =8bit = 1byte",
            "simbol" => "o",
        ]);
        Unit::create([
            "code" => "Q13",
            "name" => "Octeto por segundo",
            "description" => "Uncodead octeto divcodecodeo por la uncodead base SI segundo",
            "simbol" => "o/s",
        ]);
        Unit::create([
            "code" => "Q14",
            "name" => "Shannon",
            "description" => "Uncodead logarítmica para la información igual al contencodeo de la decisión de una oración de dos sucesos mutuamente excluyentes, expresada como un logaritmo a la base 2.",
            "simbol" => "Sh",
        ]);
        Unit::create([
            "code" => "Q15",
            "name" => "Hartley",
            "description" => "Uncodead logarítmica para la información igual al contencodeo de la decisión de una oración de diez sucesos mutuamente excluyentes, expresada como un logaritmo base 10.",
            "simbol" => "Hart",
        ]);
        Unit::create([
            "code" => "Q16",
            "name" => "Uncodead natural de información ",
            "description" => "Uncodead logarítmica para información igual al contencodeo de la decisión de una oración de 718 281 828 459 sucesos mutuamente excluyentes, expresada como un logaritmo para basar el valor de Euler e.",
            "simbol" => "nat",
        ]);
        Unit::create([
            "code" => "Q17",
            "name" => "Shannon por segundo",
            "description" => "Uncodead logarítmica relacionada con el tiempo para información igual al contencodeo de la decisión de una oración de dos sucesos mutuamente excluyentes, expresada como logarítmo base 2.",
            "simbol" => "Sh/s",
        ]);
        Unit::create([
            "code" => "Q18",
            "name" => "Hartley por segundo ",
            "description" => "Uncodead logaritmica relacionada con el tiempo para información igual al contencodeo de la decisión de una oración de diez sucesos mutuamente excluyentes, expresada como un logartimo a la base 10. ",
            "simbol" => "Hart/s",
        ]);
        Unit::create([
            "code" => "Q19",
            "name" => "Uncodead natural de información por segundo ",
            "description" => "Uncodead logarítmica relacionada con el tiempo para información igual al contencodeo de la decisión de una oración 2.718281828459 mutuamente excluyentes, expresado como un logarítmo a la base del valor de Euler",
            "simbol" => "nat/s",
        ]);
        Unit::create([
            "code" => "Q20",
            "name" => "Segundo por kilogramo",
            "description" => "Uncodead de la probabilcodead de transición de Einsten para emisiones espontáneas o inductoras y absorción según ISO 80000-7, expresada como uncodead base SI segundo divcodecodea por la uncodead base kilogramo.",
            "simbol" => "s/kg",
        ]);
        Unit::create([
            "code" => "Q21",
            "name" => "Watt metro cuadrado",
            "description" => "Uncodead de las primeras constantes de radiación c1=2.p.c0, cuyo valor es 3.74177118.10 6 veces la del valor comparativo del producto de la uncodead SI deriva watts multiplicada con la potencia de la SI medcodeor de la uncodead base con el exponente 2.",
            "simbol" => "W·m²",
        ]);
        Unit::create([
            "code" => "Q22",
            "name" => "Segundo por metro cúbicos de radianes ",
            "description" => "Uncodead de la denscodead de estados como una expresión de la frecuencia angular como complemento del producto de hertzio y radiante y la potencia del medcodeor de la uncodead base SI por exponente 3.",
            "simbol" => "1/(Hz·rad·m³)",
        ]);
        Unit::create([
            "code" => "Q23",
            "name" => "Weber a la potencia menos uno",
            "description" => "Complemento de la uncodead SI deriva weber como uncodead de la constante de Joshepson, cuyo valor es igual al 384,597,891 veces del valor de referencia gigahertz divcodecodeo  por volt. 4",
            "simbol" => "1/Wb",
        ]);
        Unit::create([
            "code" => "Q24",
            "name" => "Reciproccodead de Pulgada",
            "description" => "Complemento de la uncodead pulgada según el sistema de uncodeades Anglo-Americanas e Imperial",
            "simbol" => "1/in",
        ]);
        Unit::create([
            "code" => "Q25",
            "name" => "Dioptría",
            "description" => "Uncodead utilizada en la declaración de índices de refracción relativos de sistemas ópticos como complemento de la longitud focal con correspondencia con: 1dpt=1/m.",
            "simbol" => "dpt",
        ]);
        Unit::create([
            "code" => "Q26",
            "name" => "Uno por uno",
            "description" => "Valor del cociente de dos uncodeades físicas del mismo tipo que un numerador y denominador mientras que las uncodeades se acortan mutuamente",
            "simbol" => "1/1",
        ]);
        Unit::create([
            "code" => "Q27",
            "name" => "Newtons metros por metro",
            "description" => "Uncodead para el momento de rotación relacionado con la longitud como producto de la uncodead SI derivada por el medcodeor de la uncodead SI",
            "simbol" => "N·m/m²",
        ]);
        Unit::create([
            "code" => "Q28",
            "name" => "Kilograma por metro cuadrado pascal segundo",
            "description" => "Uncodead para la capaccodead de un material para permitir la transición del vapor",
            "simbol" => "kg/(m²·Pa·s)",
        ]);
        Unit::create([
            "code" => "Q29",
            "name" => "Microgramo por hectogramo",
            "description" => "Microgramo por hectogramo",
            "simbol" => "µg/hg",
        ]);
        Unit::create([
            "code" => "Q3",
            "name" => "Comcodea",
            "description" => "Uncodead de conteo que define el número de comcodea",
        ]);
        Unit::create([
            "code" => "Q30",
            "name" => "Ph (potencial de hcoderogeno)",
            "description" => "Es una escala numérica utilizada para especificar la accodeez o basiccodead de una solución acuosa . ",
            "simbol" => "pH",
        ]);
        Unit::create([
            "code" => "Q31",
            "name" => "Kilojoule por gramo",
            "simbol" => "kJ/g",
        ]);
        Unit::create([
            "code" => "Q32",
            "name" => "Femtolitro",
            "simbol" => "fl",
        ]);
        Unit::create([
            "code" => "Q33",
            "name" => "Picolitro",
            "simbol" => "pl",
        ]);
        Unit::create([
            "code" => "Q34",
            "name" => "Nanolitro",
            "simbol" => "nl",
        ]);
        Unit::create([
            "code" => "Q35",
            "name" => "Megawatts por minuto",
            "description" => "Uncodead de potencia que define la cantcodead total de energía mayor transfercodea o consumcodea en un minuto.",
            "simbol" => "MW/min",
        ]);
        Unit::create([
            "code" => "Q36",
            "name" => "Metro cuadrado por metro cúbico",
            "description" => "Uncodead de la cantcodead de superficie por uncodead de volumen de un objeto o colección de objetos",
            "simbol" => "m2/m3",
        ]);
        Unit::create([
            "code" => "Q37",
            "name" => "Metro cúbico estándar por día",
            "description" => "Metro cúbico estándar (temperatura 15 ° C y presión 101325 milibares) por día",
        ]);
        Unit::create([
            "code" => "Q38",
            "name" => "Metro cúbico estándar por hora",
            "description" => "Metro cúbico estándar (temperatura 15 ° C y presión 101325 milibares) por día",
        ]);
        Unit::create([
            "code" => "Q39",
            "name" => "Metro cúbico normalizado por día",
            "description" => "Metro cúbico estándar (temperatura 0° C y presión 101325 milibares) por día",
        ]);
        Unit::create([
            "code" => "Q40",
            "name" => "Metro cúbico normalizado por hora",
            "description" => "Metro cúbico estándar (temperatura 0° C y presión 101325 milibares) por día",
        ]);
        Unit::create([
            "code" => "Q41",
            "name" => "Joule por metro cúbico normalizado",
            "description" => "Joule por metro cúbico normalizado (temperatura 0 ° C y presión 101325 milibares).",
        ]);
        Unit::create([
            "code" => "Q42",
            "name" => "Joule por metro cúbico estándar",
            "description" => "Joule por metro cúbico normalizado (temperatura 15 ° C y presión 101325 milibares).",
        ]);
        Unit::create([
            "code" => "QA",
            "name" => "Página-fascimil",
            "description" => "Uncodead de conteo que define el número de páginas fascimil",
        ]);
        Unit::create([
            "code" => "QAN",
            "name" => "Cuarto (de un año)",
            "description" => "Uncodead de tiempo que define el número de años (3 meses)",
        ]);
        Unit::create([
            "code" => "QB",
            "name" => "Página, copia impresa",
            "description" => "Uncodead de conteo que define el número de copias impresas",
        ]);
        Unit::create([
            "code" => "QD",
            "name" => "Cuarta docena",
        ]);
        Unit::create([
            "code" => "QH",
            "name" => "Un cuarto de hora",
        ]);
        Unit::create([
            "code" => "QK",
            "name" => "Cuarto de kilogramo",
        ]);
        Unit::create([
            "code" => "QR",
            "name" => "Mano de papel",
            "description" => "Uncodead de conteo para papel, expresada como el número de manos de papel (mano de papel: numero de papel en hojas, típicamente 25)",
            "simbol" => "qr",
        ]);
        Unit::create([
            "code" => "QT",
            "name" => "Cuarto (EUA)",
            "description" => "Utilice cuarto de galón líqucodeo (código común QTL)",
            "simbol" => "Qt (US)",
        ]);
        Unit::create([
            "code" => "QTD",
            "name" => "Cuarto seco (estados uncodeos)",
            "simbol" => "dry qt (US)",
        ]);
        Unit::create([
            "code" => "QTI",
            "name" => "Cuarto (UK)",
            "description" => "Es una uncodead de medcodea de volumen equivalente a media fanega. En Castilla equivalía a aproximadamente a 6 celemines. La medcodea real cambia según regiones o incluso localcodeades.",
            "simbol" => "qt (UK)",
        ]);
        Unit::create([
            "code" => "QTL",
            "name" => "Cuarto de líqucodeo (estadis uncodeos)",
            "simbol" => "liq qt (US)",
        ]);
        Unit::create([
            "code" => "QTR",
            "name" => "Cuarto",
            "description" => "Uncodead tradicional de peso igual a 1/4 de peso. En el Reino Uncodeo 1/4 equivale a 28 libras.",
            "simbol" => "Qr (UK)",
        ]);
        Unit::create([
            "code" => "R1",
            "name" => "Pica",
            "description" => "Uncodead de conteo que define el número de picas (pica: longitud tipografia igual a 12 puntos o 4,22 mm aprox)",
        ]);
        Unit::create([
            "code" => "R9",
            "name" => "Mil metros cúbicos ",
            "description" => "Uncodead de volumen que equivale a mil metro cúbicos",
        ]);
        Unit::create([
            "code" => "RH",
            "name" => "Hora de funcionamiento",
            "description" => "Uncodead de tiempo que define el número de horas de operación",
        ]);
        Unit::create([
            "code" => "RK",
            "name" => "Medcodea métrica de rollo",
        ]);
        Unit::create([
            "code" => "RM",
            "name" => "Resma",
            "description" => "Uncodead de conteo para papel, espresada como el número de resmas (resma: una gran cantcodead de hojas de papel, tipicamente 500)",
        ]);
        Unit::create([
            "code" => "RN",
            "name" => "Medcodea métrica de Hojas (resma)",
        ]);
        Unit::create([
            "code" => "ROM",
            "name" => "Habitación",
            "description" => "Uncodead de conteo que define el número de habitaciones",
        ]);
        Unit::create([
            "code" => "RP",
            "name" => "Libra por resma",
            "description" => "Uncodead de masa para papel, expresada en libras por resma. (Resma: una gran cantcodead de papel, tipicamente 500 hojas)",
        ]);
        Unit::create([
            "code" => "RPM",
            "name" => "Revoluciones por minuto",
            "description" => "Consulte la Guía ISO / TC12 SI",
            "simbol" => "r/min",
        ]);
        Unit::create([
            "code" => "RPS",
            "name" => "Revoluciones por segundo",
            "description" => "Consulte la Guía ISO / TC12 SI",
            "simbol" => "r/s",
        ]);
        Unit::create([
            "code" => "RS",
            "name" => "Reiniciar",
        ]);
        Unit::create([
            "code" => "RT",
            "name" => "Milla de toneladas de ingresos",
            "description" => "Uncodead de información tipicamente utilizada para propósitos de facturación, expresada como el número de toneladas en ingresos: una tonelada métrica o un metro cúbico, la que sea mayor) se movio  a una distancia de una milla",
        ]);
        Unit::create([
            "code" => "RU",
            "name" => "correr",
        ]);
        Unit::create([
            "code" => "S3",
            "name" => "Pie cuadrado por segundo",
            "description" => "Sinónimo: pie cuadrado por segundo",
            "simbol" => "ft²/s",
        ]);
        Unit::create([
            "code" => "S4",
            "name" => "Metro cuadrado por segundo",
            "description" => "Sinónimo: metro cuadrado por segundo",
            "simbol" => "m²/s",
        ]);
        Unit::create([
            "code" => "S5",
            "name" => "Sesenta cuartos de pulgada",
        ]);
        Unit::create([
            "code" => "S6",
            "name" => "Sesión",
        ]);
        Unit::create([
            "code" => "S7",
            "name" => "uncodead de almacenamiento",
        ]);
        Unit::create([
            "code" => "S8",
            "name" => "Uncodead de publiccodead estándar",
        ]);
        Unit::create([
            "code" => "SAN",
            "name" => "Medio año",
            "description" => "Uncodead de tiempo que define el número de años ",
        ]);
        Unit::create([
            "code" => "SCO",
            "name" => "Puntuación",
            "description" => "Uncodead de conteo que define el número de uncodeades en multiplos de 20",
        ]);
        Unit::create([
            "code" => "SCR",
            "name" => "Escrúpulo",
            "description" => "El escrúpulo (en inglés apothecary scruple) era Uncodead de medcodea utilizada en farmacia para pesar ingredientes de los medicamentos.\r\n\r\nEl escrúpulo podía tener diferentes valores en cada país: en España y Portugal, un escrúpulo equivalía a 24 granos (pesando 1,55517384 gramos), mientras que en el sistema imperial inglés correspondía a 20 granos (1,2959782 gramos).\r\n\r\nEn astronomía, un escrúpulo es el resultado de divcodeir en sesenta partes un grado de círculo.",
        ]);
        Unit::create([
            "code" => "SD",
            "name" => "Libra sólcodea",
        ]);
        Unit::create([
            "code" => "SE",
            "name" => "Sección",
        ]);
        Unit::create([
            "code" => "SEC",
            "name" => "Segundo Unit::create([uncodead de tiempo]",
            "description" => "Supone comúnmente una sesentava parte de un minuto (1⁄60) y es esencial para la medición en múltiples sistemas de uncodeades. ",
            "simbol" => "s",
        ]);
        Unit::create([
            "code" => "SET",
            "name" => "Conjunto",
            "description" => "Uncodead de conteo que define el número de conjuntos (Conjunto: un número de objetos agrupados)",
        ]);
        Unit::create([
            "code" => "SG",
            "name" => "Segmento ",
            "description" => "Uncodead de información equivalente a 64000bytes",
        ]);
        Unit::create([
            "code" => "SHT",
            "name" => "Tonelada de envíos",
            "description" => "Uncodead de masa que define el número de toneladas para el envío.",
        ]);
        Unit::create([
            "code" => "SIE",
            "name" => "Siemens",
            "description" => "Se denomina siemens a la uncodead derivada del SI para la medcodea de la conductancia eléctrica.",
            "simbol" => "S",
        ]);
        Unit::create([
            "code" => "SK",
            "name" => "Camión cisterna con división",
        ]);
        Unit::create([
            "code" => "SM3",
            "name" => "Metro cúbico estándar",
            "description" => "Metro cúbico estándar (temperatura 15 ° C y presión 101325 milibares)",
        ]);
        Unit::create([
            "code" => "SMI",
            "name" => "Milla (milla estatal)",
            "description" => "Medcodea de longitud, especialmente utilizada en marina, que equivale a 1,852 m.",
            "simbol" => "mile",
        ]);
        Unit::create([
            "code" => "SN",
            "name" => "Barra cuadrada",
            "simbol" => "Rd²",
        ]);
        Unit::create([
            "code" => "SQ",
            "name" => "Cuadrado",
            "description" => "Uncodead de conteo que define el número de cuadrados (cuadrado: forma rectangular)",
        ]);
        Unit::create([
            "code" => "SQR",
            "name" => "Cuadrado y techado",
            "description" => "Uncodead de conteo que conteo que define el número de plazas de materiales para techos, medcodea en múltiplos de 100 pies cuadrados",
        ]);
        Unit::create([
            "code" => "SR",
            "name" => "Tira",
            "description" => "Uncodead de conteo que define el número de tiras (pieza larga y estrecha de un objeto)",
        ]);
        Unit::create([
            "code" => "SS",
            "name" => "Medcodea métrica de hoja",
        ]);
        Unit::create([
            "code" => "SST",
            "name" => "Estandar corto (7200 partcodeos)",
        ]);
        Unit::create([
            "code" => "STC",
            "name" => "Palo",
            "description" => "Uncodead de conteo que define el número de palos (palo: pieza delgada y a menudo cilíndirca de una sustancia)",
        ]);
        Unit::create([
            "code" => "STI",
            "name" => "Estone (UK)",
            "simbol" => "st",
        ]);
        Unit::create([
            "code" => "STK",
            "name" => "Palo, cigarrillo",
            "description" => "Uncodead de conteo que define el número de cigarrillos en la uncodead más pequeña para el cálculo de la población y/o del trabajo",
        ]);
        Unit::create([
            "code" => "STL",
            "name" => "Litro estándar",
            "description" => "Uncodead de volumen que define el número de litros de un producto a una temperatura de 15 grados celsius, especialmente en relación con los aceites de hcoderocarburos",
        ]);
        Unit::create([
            "code" => "STN",
            "name" => "Tonelada (estados uncodeos) o tonelada corta (UK y estados uncodeos)",
            "description" => "Sinónimo: tonelada neta (2000 lb)",
            "simbol" => "ton (US)",
        ]);
        Unit::create([
            "code" => "STW",
            "name" => "Paja",
            "description" => "Uncodead de conteo que define el número de pajitas (paja:un tubo delgado utilizado para succionar liqucodeos)",
        ]);
        Unit::create([
            "code" => "SW",
            "name" => "Número de madejas",
            "description" => "Uncodead de conteo que define el número de madejas (skein:un paquete de hilo o hilo suelto)",
        ]);
        Unit::create([
            "code" => "SX",
            "name" => "Envío",
            "description" => "Uncodead de conteo que define el número de envíos (embarque: una cantcodead de mercancias embarcadas o transportadas)",
        ]);
        Unit::create([
            "code" => "SYR",
            "name" => "Jeringuilla",
            "description" => "Uncodead de conteo que define el número de jeringuillas (jeringa: un pequeño dispositivo para bombear, pulverizar y/o inyectar liqucodeos a través de una pequeña abertura)",
        ]);
        Unit::create([
            "code" => "T0",
            "name" => "Linea de telecomunicaciones en servicio",
            "description" => "Uncodead de conteo que define el número de líneas de servicio",
        ]);
        Unit::create([
            "code" => "T1",
            "name" => "Mil libras",
        ]);
        Unit::create([
            "code" => "T3",
            "name" => "Mil pedazos",
            "description" => "Uncodead de conteo que define el número de piezas en múltiplos de 1000 (pieza: un solo artículo, artículo o ejemplar)",
        ]);
        Unit::create([
            "code" => "T4",
            "name" => "Bolsa de mil",
        ]);
        Unit::create([
            "code" => "T5",
            "name" => "Mil envolturas",
        ]);
        Unit::create([
            "code" => "T6",
            "name" => "Mil galones (US)",
        ]);
        Unit::create([
            "code" => "T7",
            "name" => "Impresión de mil",
        ]);
        Unit::create([
            "code" => "T8",
            "name" => "Mil pulgadas lineales",
        ]);
        Unit::create([
            "code" => "TA",
            "name" => "Décimo de pie cúbico",
        ]);
        Unit::create([
            "code" => "TAB",
            "name" => "Tonelada de registro bruto",
            "description" => "Una uncodead de masa igual al total de las imágenes cúbicas antes de las deducciones, donde 1 registro t es igual a 100 pies cúbicos.Véase el Convenio internacional sobre el arqueo de los buques.",
        ]);
        Unit::create([
            "code" => "TAH",
            "name" => "Kiloamperio-hora (milamperio-hora)",
            "simbol" => "kA·h",
        ]);
        Unit::create([
            "code" => "TAN",
            "name" => "Número de accodeo total",
            "description" => "Uncodead de química que define la cantcodead de hcoderóxcodeo de potasio (KOH) en miligramos que se necesita para neutralizar los áccodeos en un gramo de aceite. Es una medcodea importante de la calcodead del petróleo crudo",
            "simbol" => "TAN",
        ]);
        Unit::create([
            "code" => "TC",
            "name" => "Camión",
        ]);
        Unit::create([
            "code" => "TD",
            "name" => "Termico",
        ]);
        Unit::create([
            "code" => "TE",
            "name" => "Totalizador",
        ]);
        Unit::create([
            "code" => "TF",
            "name" => "Diez yardas cuadradas",
        ]);
        Unit::create([
            "code" => "TI",
            "name" => "Mil pulgadas cuadradas",
            "description" => "Uncodead de medcodea imperial",
        ]);
        Unit::create([
            "code" => "TIC",
            "name" => "Tonelada métrica, inclucodeo el contenedor",
            "description" => "Uncodead de masa que define el número de toneladas métricas de un producto, incluyendo su contenedor",
        ]);
        Unit::create([
            "code" => "TIP",
            "name" => "Tonelada métrica, inclucodeo el embalaje interior",
            "description" => "Uncodead de masa que define el número de toneladas metricas de un producto, incluyendo sus materiales de embalaje interior",
        ]);
        Unit::create([
            "code" => "TJ",
            "name" => "Mil centímetros cuadrados",
        ]);
        Unit::create([
            "code" => "TKM",
            "name" => "Tonelada kilometro",
            "description" => "Uncodead de información típicamente usada para propósitos de facturación, expresada como el número de toneladas (toneladas métricas) movcodeas sobre una distancia de un kilómetro",
            "simbol" => "t·km",
        ]);
        Unit::create([
            "code" => "TL",
            "name" => "Mil pies (lineal)",
        ]);
        Unit::create([
            "code" => "TMS",
            "name" => "Kilogramo de carne importada, menos despojos",
            "description" => "Uncodead de masa equivalente a mil gramos de carne importada, sin tener en cuenta los subproductos menos valiosos como las montañas",
        ]);
        Unit::create([
            "code" => "TNE",
            "name" => "Tonelada (tonelada métrica)",
            "description" => "Sinónimo: tonelada métrica",
            "simbol" => "t",
        ]);
        Unit::create([
            "code" => "TP",
            "name" => "Paquete de diez",
            "description" => "Uncodead de conteo que define el número de elementos en múltiplos de 10",
        ]);
        Unit::create([
            "code" => "TPI",
            "name" => "Dientes por pulgada",
            "description" => "El número de dientes por pulgada",
            "simbol" => "TPI",
        ]);
        Unit::create([
            "code" => "TPR",
            "name" => "Decenas de pares",
            "description" => "Uncodead de conteo que define el número de pares en multiplos de 10 (par:elemento descrito por dos)",
        ]);
        Unit::create([
            "code" => "TQ",
            "name" => "Mil pies",
        ]);
        Unit::create([
            "code" => "TQD",
            "name" => "Mil metros cúbicos por día ",
            "description" => "Uncodead de volumen igual a mil metros cúbicos por día",
            "simbol" => "km³/d",
        ]);
        Unit::create([
            "code" => "TR",
            "name" => "Diez pies cuadrados",
        ]);
        Unit::create([
            "code" => "TRL",
            "name" => "Trillones (eur)",
            "description" => "Uncodead de escala númerica",
        ]);
        Unit::create([
            "code" => "Ts",
            "name" => "Mil pies cuadrados",
        ]);
        Unit::create([
            "code" => "TSD",
            "name" => "Tonelada de sustancia 90% seca",
        ]);
        Unit::create([
            "code" => "TSH",
            "name" => "Tonelada de vapor por hora",
        ]);
        Unit::create([
            "code" => "TST",
            "name" => "Decena de conjuntos",
            "description" => "Uncodead de conteo que define el número de conjuntos en múltiplos de 10 (conjunto: un número de objetos agrupados)",
        ]);
        Unit::create([
            "code" => "TT",
            "name" => "Mil metros lineales",
        ]);
        Unit::create([
            "code" => "TTS",
            "name" => "Decenas de millar de pegatinas",
            "description" => "Uncodead de conteo que define el número de palos multiples de 10000 (Pegatina: pieza delgada y a menudo cilíndrica de una sustancia)",
        ]);
        Unit::create([
            "code" => "Tu",
            "name" => "Contenedor externo",
            "description" => "Tipo de caja de contención que sirve como contenedor de transporte externo, no especificado como equipo de transporte.",
        ]);
        Unit::create([
            "code" => "TV",
            "name" => "Mil kilogramos",
        ]);
        Unit::create([
            "code" => "TW",
            "name" => "Mil hojas",
        ]);
        Unit::create([
            "code" => "U1",
            "name" => "Tratamiento ",
            "description" => "Uncodead de conteo que define el número de tratamientos (tratamiento: sujección a la acción de un agente químico, físico o biológico)",
        ]);
        Unit::create([
            "code" => "U2",
            "name" => "Número de tabletas",
            "description" => "Uncodead de conteo que define el número de tabletas",
        ]);
        Unit::create([
            "code" => "UA",
            "name" => "Torr",
            "simbol" => "Torr",
        ]);
        Unit::create([
            "code" => "UB",
            "name" => "Linea de telecomunicaciones en servicio promedio ",
            "description" => "Uncodea de conteo que define el número medio de líneas de servicio",
        ]);
        Unit::create([
            "code" => "UC",
            "name" => "Puerto de telecomunicaciones ",
            "description" => "Uindad de conteo que define el número de púertos de acceso a la red",
        ]);
        Unit::create([
            "code" => "UD",
            "name" => "Décimo minuto",
        ]);
        Unit::create([
            "code" => "UE",
            "name" => "Hora de décimo",
        ]);
        Unit::create([
            "code" => "UF",
            "name" => "Uso por línea de telecomunicaciones promedio",
        ]);
        Unit::create([
            "code" => "UH",
            "name" => "Diez mil yardas",
        ]);
        Unit::create([
            "code" => "UM",
            "name" => "Millón de uncodeades",
        ]);
        Unit::create([
            "code" => "UN",
            "name" => "Newton metro",
            "simbol" => "N·m",
        ]);
        Unit::create([
            "code" => "VA",
            "name" => "Voltio-amperio por kilogramo",
            "simbol" => "V·A / kg",
        ]);
        Unit::create([
            "code" => "VLT",
            "name" => "Voltio",
            "description" => "Es la uncodead derivada del Sistema Internacional para el potencial eléctrico, la fuerza electromotriz y la tensión eléctrica.",
            "simbol" => "V",
        ]);
        Unit::create([
            "code" => "VP",
            "name" => "Volumen porcentual ",
            "description" => "Uncodead de medcodea de concentración, expresada tipícamente como el porcentaje de volumen de un soluto en una solución ",
        ]);
        Unit::create([
            "code" => "VS",
            "name" => "Visita",
        ]);
        Unit::create([
            "code" => "W2",
            "name" => "Kilo húmedo ",
            "description" => "Uncodead de masa que define el número de kilogramos de un producto, inclucodeo el contencodeo de agua del producto.",
        ]);
        Unit::create([
            "code" => "W4",
            "name" => "Dos semanas",
        ]);
        Unit::create([
            "code" => "WA",
            "name" => "Watt por kilogramo ",
            "description" => "Uncodead de potencia",
            "simbol" => "W/kg",
        ]);
        Unit::create([
            "code" => "WB",
            "name" => "Libra húmeda",
            "description" => "Uncodead de masa que define el número de libras de un material, incluyendo el contencodeo de agua del material ",
        ]);
        Unit::create([
            "code" => "WCD",
            "name" => "Cable",
            "description" => "Uncodead de volumen utilizada para medir la madera. Un pie de tabla equivale a 1/2 de un pie cúbico.",
        ]);
        Unit::create([
            "code" => "WE",
            "name" => "Tonelada húmeda ",
            "description" => "Uncodead de masa que define el número de toneladas de un material, incluyendo el contencodeo de agua del material.",
        ]);
        Unit::create([
            "code" => "WEB",
            "name" => "Weber",
            "description" => "Es el flujo magnético que, al atravesar un circuito de una sola espira produce en la misma una fuerza electromotriz de 1 volt si se anula dicho flujo en un segundo por decaimiento uniforme. ",
            "simbol" => "Wb",
        ]);
        Unit::create([
            "code" => "WEE",
            "name" => "Semana",
            "description" => "Es el período de tiempo estándar utilizado para los ciclos de días de trabajo y de descanso en la mayoría de las partes del mundo.",
            "simbol" => "wk",
        ]);
        Unit::create([
            "code" => "WG",
            "name" => "Galón de vino",
            "description" => "Uncodead de volumen igual a 231 pulgadas cúbicas",
        ]);
        Unit::create([
            "code" => "WH",
            "name" => "Rueda",
        ]);
        Unit::create([
            "code" => "WHR",
            "name" => "Watt hora",
            "simbol" => "W·h",
        ]);
        Unit::create([
            "code" => "WI",
            "name" => "Peso por pulgada cuadrada",
        ]);
        Unit::create([
            "code" => "WM",
            "name" => "Mes de trabajo ",
            "description" => "Uncodead de tiempo que define el número de meses de trabajo.",
        ]);
        Unit::create([
            "code" => "WR",
            "name" => "Envolver",
        ]);
        Unit::create([
            "code" => "WSD",
            "name" => "Estándar",
            "description" => "Uncodead de volumen de madera acabada igual a 165 pies cúbicos.",
            "simbol" => "std",
        ]);
        Unit::create([
            "code" => "WTT",
            "name" => "Watt",
            "description" => "Es la potencia que da lugar a una producción de energía igual a 1 joule por segundo. ",
            "simbol" => "W",
        ]);
        Unit::create([
            "code" => "WW",
            "name" => "Mililitro de agua",
            "description" => "Uncodead de volumen igual al número de mililitros de agua.",
        ]);
        Unit::create([
            "code" => "X1",
            "name" => "Cadena de gunter",
            "description" => "Empleada para medir distancias, formada por 100 eslabones metálicos, equivalentes a una longitud total de 20.1168 metros (66 pies) que aún es ampliamente usada en los países anglosajones. ",
            "simbol" => "ch (UK)",
        ]);
        Unit::create([
            "code" => "X1A",
            "name" => "Tambor de acero",
        ]);
        Unit::create([
            "code" => "X1B",
            "name" => "Tambor de aluminio",
        ]);
        Unit::create([
            "code" => "X1D",
            "name" => "Tambor contrachapado",
        ]);
        Unit::create([
            "code" => "X1F",
            "name" => "Contenedor flexible",
            "description" => "Contenedor de empaque de construcción flexible.",
        ]);
        Unit::create([
            "code" => "X1G",
            "name" => "Tambor de fibra",
        ]);
        Unit::create([
            "code" => "X1w",
            "name" => "Tambor de madera",
        ]);
        Unit::create([
            "code" => "X2C",
            "name" => "Barril de madera",
        ]);
        Unit::create([
            "code" => "X3A",
            "name" => "Bcodeón de acero",
        ]);
        Unit::create([
            "code" => "X3H",
            "name" => "Bcodeón de plástico",
        ]);
        Unit::create([
            "code" => "X43",
            "name" => "Bolsa de gran tamaño",
            "description" => "Bolsa de tela de plástico o de papel que tiene las dimensiones del pallet sobre el que está construcodeo.",
        ]);
        Unit::create([
            "code" => "X44",
            "name" => "Bolsa de plastico",
            "description" => "Un tipo de bolsa de plástico, normalmente utilizada para envolver piezas promocionales, publicaciones, muestras de productos y / o catálogos.",
        ]);
        Unit::create([
            "code" => "X4A",
            "name" => "Caja de acero",
        ]);
        Unit::create([
            "code" => "X4B",
            "name" => "Caja de aluminio",
        ]);
        Unit::create([
            "code" => "X4C",
            "name" => "Caja de  madera natural",
        ]);
        Unit::create([
            "code" => "X4D",
            "name" => "Caja de contrachapado",
        ]);
        Unit::create([
            "code" => "X4F",
            "name" => "Caja de madera reconstitucodea",
        ]);
        Unit::create([
            "code" => "X4G",
            "name" => "Caja de cartón",
        ]);
        Unit::create([
            "code" => "X4H",
            "name" => "Caja de plástico",
        ]);
        Unit::create([
            "code" => "X5H",
            "name" => "Bolsa de plástico tejcodeo",
        ]);
        Unit::create([
            "code" => "X5L",
            "name" => "Bolsa nameil",
        ]);
        Unit::create([
            "code" => "X5M",
            "name" => "Bolsa de papel",
        ]);
        Unit::create([
            "code" => "X6H",
            "name" => "Recipiente de plástico, Contenedor compuesto.",
        ]);
        Unit::create([
            "code" => "X6P",
            "name" => "Recipiente de vcoderio, Contenedor compuesto.",
        ]);
        Unit::create([
            "code" => "X7A",
            "name" => "Estuche para carro",
            "description" => "Tipo de contenedor portátil diseñado para almacenar equipo para el transporte en un automóvil.",
        ]);
        Unit::create([
            "code" => "X7B",
            "name" => "Estuche de madera",
            "description" => "Un estuche de madera para retener sustancias o artículos.",
        ]);
        Unit::create([
            "code" => "X8A",
            "name" => "Pallet de madera",
            "description" => "Plataforma o caja abierta de madera, en la que se conservan las mercancías para facilitar su manejo mecánico durante el transporte y almacenamiento.",
        ]);
        Unit::create([
            "code" => "X8B",
            "name" => "Cajón de madera",
            "description" => "Un contenedor de madera, en el que se conservan las mercancías para facilitar su manipulación mecánica durante el transporte y almacenamiento.",
        ]);
        Unit::create([
            "code" => "X8C",
            "name" => "Madera flejada",
            "description" => "Piezas sueltas o sin contenedor de madera atadas o envueltas.",
        ]);
        Unit::create([
            "code" => "XAA",
            "name" => "Contenedor intermedio  para gráneles de plástico rígcodeo",
        ]);
        Unit::create([
            "code" => "XAB",
            "name" => "Contenedor de fibra",
            "description" => "Recipiente de contención de fibra, utilizado para retener sustancias o artículos.",
        ]);
        Unit::create([
            "code" => "XAC",
            "name" => "Contenedor de papel",
            "description" => "Recipiente de contención de papel, para retener sustancias o artículos.",
        ]);
        Unit::create([
            "code" => "XAD",
            "name" => "Contenedor de madera",
            "description" => "Recipiente de contención de madera, para retener sustancias o artículos.",
        ]);
        Unit::create([
            "code" => "XAE",
            "name" => "Aerosol",
            "description" => "Una uncodead de cuenta que define el número de Aerosoles",
        ]);
        Unit::create([
            "code" => "XAF",
            "name" => "Pallet modular con collares,  80cms * 60cms",
            "description" => "Pallet de tamaño estándar con dimensiones de 80 centímetros por 60 centímetros (cms).",
        ]);
        Unit::create([
            "code" => "XAG",
            "name" => "Pallet o empaquetado",
            "description" => "La carga del pallet se asegura con una película de plástico transparente envuelta alrededor y luego encogcodeo firmemente.",
        ]);
        Unit::create([
            "code" => "XAH",
            "name" => "Pallet, 100cms X 110cms",
            "description" => "Pallet tamaño estándar con dimensiones de 100 centímetros por 110 centímetros (cms).",
        ]);
        Unit::create([
            "code" => "XAI",
            "name" => "Contenedor tipo concha",
        ]);
        Unit::create([
            "code" => "XAJ",
            "name" => "Cono",
            "description" => "Contenedor utilizado en el transporte de material lineal como el hilo.",
        ]);
        Unit::create([
            "code" => "XAL",
            "name" => "Esféra",
            "description" => "Recipiente de contención esférico para retener sustancias o artículos.",
        ]);
        Unit::create([
            "code" => "XAM",
            "name" => "Ampolleta no protegcodea",
        ]);
        Unit::create([
            "code" => "XAP",
            "name" => "Ampolleta protegcodea",
        ]);
        Unit::create([
            "code" => "XAT",
            "name" => "Atomizador",
        ]);
        Unit::create([
            "code" => "XAV",
            "name" => "Cápsula",
        ]);
        Unit::create([
            "code" => "XB4",
            "name" => "Cinturón",
            "description" => "Banda utiliza para retener varios artículos juntos.",
        ]);
        Unit::create([
            "code" => "XBA",
            "name" => "Barril",
        ]);
        Unit::create([
            "code" => "XBB",
            "name" => "Bobina",
        ]);
        Unit::create([
            "code" => "XBC",
            "name" => "Cajón para botellas / Estante para botellas",
        ]);
        Unit::create([
            "code" => "XBD",
            "name" => "Tablero",
        ]);
        Unit::create([
            "code" => "XBE",
            "name" => "Flejado",
        ]);
        Unit::create([
            "code" => "XBF",
            "name" => "Globo no protegcodeo",
        ]);
        Unit::create([
            "code" => "XBG",
            "name" => "Bolso",
            "description" => "Recipiente de material flexible con tapa abierta o cerrada.",
        ]);
        Unit::create([
            "code" => "XBH",
            "name" => "Manojo",
        ]);
        Unit::create([
            "code" => "XBI",
            "name" => "Compartimiento",
        ]);
        Unit::create([
            "code" => "XBJ",
            "name" => "Cubeta",
        ]);
        Unit::create([
            "code" => "XBK",
            "name" => "Cesta",
        ]);
        Unit::create([
            "code" => "XBL",
            "name" => "Paca comprimcodea",
        ]);
        Unit::create([
            "code" => "XBM",
            "name" => "Cuenco",
        ]);
        Unit::create([
            "code" => "XBN",
            "name" => "Paca no comprimcodea",
        ]);
        Unit::create([
            "code" => "XBO",
            "name" => "Botella no-protegcodea y cilíndrica",
            "description" => "Recipiente de forma cilíndrica de cuello estrecho sin material de empaque protector externo.",
        ]);
        Unit::create([
            "code" => "XBP",
            "name" => "Globo protegcodeo",
        ]);
        Unit::create([
            "code" => "XBQ",
            "name" => "Botella cilíndrica protegcodea",
            "description" => "Recipiente de forma cilíndrica de cuello estrecho con material de empaque protector externo.",
        ]);
        Unit::create([
            "code" => "XBR",
            "name" => "Barra",
        ]);
        Unit::create([
            "code" => "XBS",
            "name" => "Botella, no-protegcodea en forma de bulbo",
            "description" => "Recipiente en forma de bulbo de cuello estrecho sin material de empaque protector externo.",
        ]);
        Unit::create([
            "code" => "XBT",
            "name" => "Rollo de tela",
        ]);
        Unit::create([
            "code" => "XBU",
            "name" => "Butt",
            "description" => "Barril de 1/2 tonel",
        ]);
        Unit::create([
            "code" => "XBV",
            "name" => "Botella de bulbo protegcodeo",
            "description" => "Recipiente en forma de bulbo de cuello estrecho con material de empaque protector externo.",
        ]);
        Unit::create([
            "code" => "XBW",
            "name" => "Caja para líqucodeos",
        ]);
        Unit::create([
            "code" => "XBX",
            "name" => "Caja",
        ]);
        Unit::create([
            "code" => "XBY",
            "name" => "Tablero, con fleje/ agrupados/ armados",
        ]);
        Unit::create([
            "code" => "XBZ",
            "name" => "Barras, con fleje/ agrupados/ armados",
        ]);
        Unit::create([
            "code" => "XCA",
            "name" => "Lata rectangular",
        ]);
        Unit::create([
            "code" => "XCB",
            "name" => "Cajón para cerveza",
        ]);
        Unit::create([
            "code" => "XCC",
            "name" => "Mantequera",
        ]);
        Unit::create([
            "code" => "XCD",
            "name" => "Lata con mango y boquilla",
        ]);
        Unit::create([
            "code" => "XCE",
            "name" => "Cesto tejcodeo",
        ]);
        Unit::create([
            "code" => "XCF",
            "name" => "Cofre",
        ]);
        Unit::create([
            "code" => "XCG",
            "name" => "Contenedor tipo Jaula",
        ]);
        Unit::create([
            "code" => "XCH",
            "name" => "Cajonera",
        ]);
        Unit::create([
            "code" => "XCI",
            "name" => "Frasco",
        ]);
        Unit::create([
            "code" => "XCJ",
            "name" => "Ataúd",
        ]);
        Unit::create([
            "code" => "XCK",
            "name" => "Barrica",
        ]);
        Unit::create([
            "code" => "XCL",
            "name" => "Espiral",
        ]);
        Unit::create([
            "code" => "XCM",
            "name" => "Paquete de tarjetas",
            "description" => "Paquete plano normalmente hecho de cartón desde / hacia el cual el producto es a menudo colgado o uncodeo.",
        ]);
        Unit::create([
            "code" => "XCN",
            "name" => "Contenedor, no especificado como equipo de transporte",
        ]);
        Unit::create([
            "code" => "XCO",
            "name" => "Garrafón no protegcodeo",
        ]);
        Unit::create([
            "code" => "XCP",
            "name" => "Garrafón protegcodeo",
        ]);
        Unit::create([
            "code" => "XCQ",
            "name" => "Cartucho",
            "description" => "Paquete que contiene una carga tal como un explosivo propulsor para armas de fuego o tóner de tinta para una impresora.",
        ]);
        Unit::create([
            "code" => "XCR",
            "name" => "Cajón",
        ]);
        Unit::create([
            "code" => "XCS",
            "name" => "Estuche",
        ]);
        Unit::create([
            "code" => "XCT",
            "name" => "Cartón",
        ]);
        Unit::create([
            "code" => "XCU",
            "name" => "Vaso",
        ]);
        Unit::create([
            "code" => "XCV",
            "name" => "Cubierta",
        ]);
        Unit::create([
            "code" => "XCW",
            "name" => "Jaula estilo rodillo",
        ]);
        Unit::create([
            "code" => "XCX",
            "name" => "Lata cilíndrica",
        ]);
        Unit::create([
            "code" => "XCY",
            "name" => "Cilindro",
        ]);
        Unit::create([
            "code" => "XCZ",
            "name" => "Lona",
        ]);
        Unit::create([
            "code" => "XDA",
            "name" => "Cajón multicapa de plástico",
        ]);
        Unit::create([
            "code" => "XDB",
            "name" => "Cajón de varias capas de madera",
        ]);
        Unit::create([
            "code" => "XDC",
            "name" => "Cajón multicapa de cartón",
        ]);
        Unit::create([
            "code" => "XDG",
            "name" => "Jaula, Según la clasificación de la compañía (Commonwealth Handling Equipment Pool (CHEP))",
        ]);
        Unit::create([
            "code" => "XDH",
            "name" => "Caja, Según la clasificación de la compañía (CHEP), Eurobox",
            "description" => "Caja montada sobre una base de pallet Según la clasificación de la compañía (CHEP).",
        ]);
        Unit::create([
            "code" => "XDI",
            "name" => "Tambor de hierro",
        ]);
        Unit::create([
            "code" => "XDJ",
            "name" => "damajuana o garrafa, no protegcodeo",
        ]);
        Unit::create([
            "code" => "XDK",
            "name" => "Cajón a granel, cartón",
        ]);
        Unit::create([
            "code" => "XDL",
            "name" => "Cajas de plástico",
        ]);
        Unit::create([
            "code" => "XDM",
            "name" => "Cajones a granel de madera",
        ]);
        Unit::create([
            "code" => "XDN",
            "name" => "Dispensador",
        ]);
        Unit::create([
            "code" => "XDP",
            "name" => "damajuana o garrafa, protegcodeo",
        ]);
        Unit::create([
            "code" => "XDR",
            "name" => "Tambor",
        ]);
        Unit::create([
            "code" => "XDS",
            "name" => "Bandeja de una capa sin cubierta y de plástico",
        ]);
        Unit::create([
            "code" => "XDT",
            "name" => "Bandeja de una capa sin cubierta y de madera",
        ]);
        Unit::create([
            "code" => "XDU",
            "name" => "Bandeja de una capa sin cubierta y  poliestireno",
        ]);
        Unit::create([
            "code" => "XDV",
            "name" => "Bandeja de una capa sin cubierta y de cartón",
        ]);
        Unit::create([
            "code" => "XDW",
            "name" => "Bandeja de dos capas sin tapa y con bandeja de plástico",
        ]);
        Unit::create([
            "code" => "XDX",
            "name" => "Bandeja de dos capas sin cubierta y de madera",
        ]);
        Unit::create([
            "code" => "XDY",
            "name" => "Bandeja de dos capas sin cubierta y de cartón",
        ]);
        Unit::create([
            "code" => "XEC",
            "name" => "Bolsa de plástico",
        ]);
        Unit::create([
            "code" => "XED",
            "name" => "Estuche, con pallet de base",
        ]);
        Unit::create([
            "code" => "XEE",
            "name" => "Estuche, con pallet base de madera",
        ]);
        Unit::create([
            "code" => "XEF",
            "name" => "Estuche, con pallet base de cartón",
        ]);
        Unit::create([
            "code" => "XEG",
            "name" => "Estuche, con pallet base de plástico",
        ]);
        Unit::create([
            "code" => "XEH",
            "name" => "Estuche, con pallet base de metal",
        ]);
        Unit::create([
            "code" => "XEI",
            "name" => "Estuche isotérmico",
        ]);
        Unit::create([
            "code" => "XEN",
            "name" => "Sobre",
        ]);
        Unit::create([
            "code" => "XFB",
            "name" => "Bolsa flexible",
            "description" => "Bolsa de contención flexible hecha de plástico, usado típicamente para el transporte de mercancías no peligrosas a granel, que usan contenedores de transporte de tamaño estándar.",
        ]);
        Unit::create([
            "code" => "XFC",
            "name" => "Cajón para fruta",
        ]);
        Unit::create([
            "code" => "XFD",
            "name" => "Cajón enmarcado",
        ]);
        Unit::create([
            "code" => "XFE",
            "name" => "Tanque flexible",
            "description" => "Contenedor flexible de plástico, usado típicamente para el transporte de cargas no peligrosas a granel usando contenedores de transporte de tamaño estándar.",
        ]);
        Unit::create([
            "code" => "XFI",
            "name" => "Firkin",
            "description" => "Barril de 41 litros",
        ]);
        Unit::create([
            "code" => "XFL",
            "name" => "Matraz",
        ]);
        Unit::create([
            "code" => "XFO",
            "name" => "Cajón para zapatos",
        ]);
        Unit::create([
            "code" => "XFP",
            "name" => "Caja auxiliar para película fotográfica",
        ]);
        Unit::create([
            "code" => "XFR",
            "name" => "Marco",
        ]);
        Unit::create([
            "code" => "XFT",
            "name" => "Contenedor para alimentos",
        ]);
        Unit::create([
            "code" => "XFW",
            "name" => "Carro de cama plana",
            "description" => "Módulo con ruedas en el que las bandejas u otros artículos de forma regular se empacan para fines de transporte.",
        ]);
        Unit::create([
            "code" => "XFX",
            "name" => "Bolsa flexible tipo contenedor",
        ]);
        Unit::create([
            "code" => "XGB",
            "name" => "Botella para gas",
            "description" => "Cilindro metálico de cuello estrecho para la retención de gas licuado o comprimcodeo.",
        ]);
        Unit::create([
            "code" => "XGI",
            "name" => "Viga",
        ]);
        Unit::create([
            "code" => "XGL",
            "name" => "Contenedor tipo galón",
            "description" => "Contenedor con una capaccodead de un galón.",
        ]);
        Unit::create([
            "code" => "XGR",
            "name" => "Recipiente de vcoderio",
            "description" => "Recipiente de contención de vcoderio para retener sustancias o artículos.",
        ]);
        Unit::create([
            "code" => "XGU",
            "name" => "Bandeja contenedor para apilar horizontalmente objetos planos",
            "description" => "Bandeja para contiene objetos planos apilados uno encima del otro.",
        ]);
        Unit::create([
            "code" => "XGY",
            "name" => "Costal de Yute",
            "description" => "Hecho de yute, usado para transportar mercancías gruesas, tales como granos, patatas, y otros productos agrícolas.",
        ]);
        Unit::create([
            "code" => "XGZ",
            "name" => "Vigas con correas o agrupadas",
        ]);
        Unit::create([
            "code" => "XHA",
            "name" => "Cesta con mango y de plástico",
        ]);
        Unit::create([
            "code" => "XHB",
            "name" => "Cesta con mango y de madera",
        ]);
        Unit::create([
            "code" => "XHC",
            "name" => "Cesta  con asa y de  cartón",
        ]);
        Unit::create([
            "code" => "XHG",
            "name" => "Hogshead",
            "description" => "Barril de 1/4 de tonel",
        ]);
        Unit::create([
            "code" => "XHN",
            "name" => "Gancho",
            "description" => "Artefacto, cuya forma con un gancho en la parte superior, tiene el propósito de colgar artículos de un carril.",
        ]);
        Unit::create([
            "code" => "XHR",
            "name" => "Cesto",
        ]);
        Unit::create([
            "code" => "XIA",
            "name" => "Paquete con pantalla y de madera",
        ]);
        Unit::create([
            "code" => "XIB",
            "name" => "Paquete  con pantalla y de cartón",
        ]);
        Unit::create([
            "code" => "XIC",
            "name" => "Paquete con pantalla y de plástico",
        ]);
        Unit::create([
            "code" => "Xcode",
            "name" => "Paquete con pantalla y de metal",
        ]);
        Unit::create([
            "code" => "XIE",
            "name" => "Paquete de mostrador.",
        ]);
        Unit::create([
            "code" => "XIF",
            "name" => "Envase para alimentos",
            "description" => "Envase flexible tubular o de piel, posiblemente transparente, a menudo utilizado para contener alimentos (por ejemplo salami).",
        ]);
        Unit::create([
            "code" => "XIG",
            "name" => "Paquete envuelto en papel",
        ]);
        Unit::create([
            "code" => "XIH",
            "name" => "Tambor de plástico",
        ]);
        Unit::create([
            "code" => "XIK",
            "name" => "Paquete de cartón con los agujeros para botellas",
            "description" => "Material de empaque realizado en cartón que facilita la separación de botellas indivcodeuales de vcoderio o plástico.",
        ]);
        Unit::create([
            "code" => "XIL",
            "name" => "Bandeja rígcodea con tapa y apilable (CEN TS 14482: 2002)",
            "description" => "Bandeja rígcodea apilable empotrada compatible con CEN TS 14482: 2002.",
        ]);
        Unit::create([
            "code" => "XIN",
            "name" => "Lingote",
        ]);
        Unit::create([
            "code" => "XIZ",
            "name" => "Lingotes  con correas/ agrupados",
        ]);
        Unit::create([
            "code" => "XJB",
            "name" => "Bolsa jumbo",
            "description" => "Bolsa de contención flexible, ampliamente utilizada para almacenamiento, transporte y manipulación de materiales en polvo, escamas o granulares. Típicamente construcodeo a partir de tejcodeo de polipropileno (PP) tejcodeo en forma de bolsas cúbicas.",
        ]);
        Unit::create([
            "code" => "XJC",
            "name" => "Bcodeón rectangular",
        ]);
        Unit::create([
            "code" => "XJG",
            "name" => "Jarra",
        ]);
        Unit::create([
            "code" => "XJR",
            "name" => "Tarro",
        ]);
        Unit::create([
            "code" => "XJT",
            "name" => "Bolsa de yute",
        ]);
        Unit::create([
            "code" => "XJY",
            "name" => "Bcodeón, cilíndrico",
        ]);
        Unit::create([
            "code" => "XKG",
            "name" => "Barrilete",
        ]);
        Unit::create([
            "code" => "XKI",
            "name" => "Kit (Conjunto de piezas)",
            "description" => "Conjunto de artículos o implementos utilizados para un propósito específico.",
        ]);
        Unit::create([
            "code" => "XLE",
            "name" => "Valijas",
            "description" => "Colección de bolsas, cajas y / o contenedores que contienen objetos personales para un viaje.",
        ]);
        Unit::create([
            "code" => "XLG",
            "name" => "Bitacora",
        ]);
        Unit::create([
            "code" => "XLT",
            "name" => "Lote",
        ]);
        Unit::create([
            "code" => "XLU",
            "name" => "Caja de arrastre",
            "description" => "Caja de madera para el transporte y almacenamiento de frutas y verduras.",
        ]);
        Unit::create([
            "code" => "XLV",
            "name" => "Contenedor pequeño",
            "description" => "Contenedor de madera o metal, usado para empacar artículos de uso doméstico y personales.",
        ]);
        Unit::create([
            "code" => "XLZ",
            "name" => "Registros  con fleje/ agrupados/ armados",
        ]);
        Unit::create([
            "code" => "XMA",
            "name" => "Cajón metálico",
            "description" => "Caja de contención hecha de metal para retener sustancias o artículos.",
        ]);
        Unit::create([
            "code" => "XMB",
            "name" => "Múltiplo de bolsas",
        ]);
        Unit::create([
            "code" => "XMC",
            "name" => "Cajón para leche",
        ]);
        Unit::create([
            "code" => "XME",
            "name" => "Contenedor de metal",
            "description" => "Tipo de caja de contención hecha de metal para retener sustancias o artículos, no especificado de otro modo como equipo de transporte.",
        ]);
        Unit::create([
            "code" => "XMR",
            "name" => "Recipiente de metal",
            "description" => "Recipiente de contención de metal para retener sustancias o artículos.",
        ]);
        Unit::create([
            "code" => "XMS",
            "name" => "Saco milti-pared",
        ]);
        Unit::create([
            "code" => "XMT",
            "name" => "Tapete",
        ]);
        Unit::create([
            "code" => "XMW",
            "name" => "Contenedor envuelto en plástico",
            "description" => "Recipiente de contención envuelto en plástico para retener sustancias o artículos.",
        ]);
        Unit::create([
            "code" => "XMX",
            "name" => "Caja pequeña de cerillos",
        ]);
        Unit::create([
            "code" => "XNA",
            "name" => "No disponible",
        ]);
        Unit::create([
            "code" => "XNE",
            "name" => "Sin empaque o no empaquetado",
        ]);
        Unit::create([
            "code" => "XNF",
            "name" => "Sin empaque o no empaquetado, uncodead simple",
        ]);
        Unit::create([
            "code" => "XNG",
            "name" => "Sin empaque o no empaquetado, uncodeades múltiples",
        ]);
        Unit::create([
            "code" => "XNS",
            "name" => "Caja ncodeo",
        ]);
        Unit::create([
            "code" => "XNT",
            "name" => "Red",
        ]);
        Unit::create([
            "code" => "XNU",
            "name" => "Red de plástico con tubo",
        ]);
        Unit::create([
            "code" => "XNV",
            "name" => "Red nameil con tubo",
        ]);
        Unit::create([
            "code" => "XOA",
            "name" => "Pallet, Según la clasificación de la compañía (Commonwealth Handling Equipment Pool (CHEP) 40 cm x 60 cm",
            "description" => "Pallet de dimensiones 40 centímetros x 60 centímetros.",
        ]);
        Unit::create([
            "code" => "XOB",
            "name" => "Pallet, Según la clasificación de la compañía (Commonwealth Handling Equipment Pool (CHEP) 80 cm x 120 cm",
            "description" => "Pallet de dimensiones 80 centímetros x 120 centímetros.",
        ]);
        Unit::create([
            "code" => "XOC",
            "name" => "Pallet, Según la clasificación de la compañía (Commonwealth Handling Equipment Pool (CHEP) 100 cm x 120 cm",
            "description" => "Pallet de dimensiones 100 centímetros x 120 centímetros.",
        ]);
        Unit::create([
            "code" => "XOD",
            "name" => "Pallet, AS 4068-1993",
            "description" => "Pallet con  estándar australiano de dimensiones 115.5 centímetros x 116.5 centímetros.",
        ]);
        Unit::create([
            "code" => "XOE",
            "name" => "Pallet, ISO T11",
            "description" => "Pallet con estándar ISO de dimensiones 110 centímetros x 110 centímetros, prevalente en la región Asia-Pacífico.",
        ]);
        Unit::create([
            "code" => "XOF",
            "name" => "Plataforma, peso o dimensión no especificada",
            "description" => "Plataforma de carga equivalente del Pallet de dimensiones desconoccodeas o peso desconoccodeo.",
        ]);
        Unit::create([
            "code" => "XOK",
            "name" => "Bloque",
            "description" => "Una pieza sólcodea de una sustancia dura, tal como granito, que tiene uno o más lados planos.",
        ]);
        Unit::create([
            "code" => "XOT",
            "name" => "Octabin",
            "description" => "Envase estándar de cartón de grandes dimensiones para almacenar por ejemplo verduras, gránulos de plástico u otros productos secos.",
        ]);
        Unit::create([
            "code" => "XP2",
            "name" => "Charola",
            "description" => "Recipiente ancho y abierto, usualmente de metal.",
        ]);
        Unit::create([
            "code" => "XPA",
            "name" => "Cajetilla",
            "description" => "Paquete pequeño.",
        ]);
        Unit::create([
            "code" => "XPB",
            "name" => "Pallet, Caja combinada y abierta con caja y pallet.",
        ]);
        Unit::create([
            "code" => "XPC",
            "name" => "Paquete postal",
        ]);
        Unit::create([
            "code" => "XPD",
            "name" => "Pallet modular con collares (80cms * 100cms)",
            "description" => "Pallet tamaño estándar de dimensiones 80 centímetros por 100 centímetros (cms).",
        ]);
        Unit::create([
            "code" => "XPE",
            "name" => "Pallet modular con collares (80cms * 120cms)",
            "description" => "Pallet tamaño estándar de dimensiones 80 centímetros por 120 centímetros (cms).",
        ]);
        Unit::create([
            "code" => "XPF",
            "name" => "Corral",
            "description" => "Pequeño recinto abierto para retener animales.",
        ]);
        Unit::create([
            "code" => "XPG",
            "name" => "Placa",
        ]);
        Unit::create([
            "code" => "XPH",
            "name" => "Cantaro",
        ]);
        Unit::create([
            "code" => "XPI",
            "name" => "Pleca",
        ]);
        Unit::create([
            "code" => "XPJ",
            "name" => "Canastilla",
        ]);
        Unit::create([
            "code" => "XPK",
            "name" => "Paquete",
            "description" => "Uncodead de empaque estándar.",
        ]);
        Unit::create([
            "code" => "XPL",
            "name" => "Balde",
        ]);
        Unit::create([
            "code" => "XPN",
            "name" => "Tablón",
        ]);
        Unit::create([
            "code" => "XPO",
            "name" => "Bolsa pequeña",
        ]);
        Unit::create([
            "code" => "XPR",
            "name" => "Contenedor de plástico",
            "description" => "Recipiente de contención de plástico para retener sustancias o artículos.",
        ]);
        Unit::create([
            "code" => "XPT",
            "name" => "Maceta",
        ]);
        Unit::create([
            "code" => "XPU",
            "name" => "Cacerola",
        ]);
        Unit::create([
            "code" => "XPV",
            "name" => "Tubos, con fleje/ agrupados/ armados",
        ]);
        Unit::create([
            "code" => "XPX",
            "name" => "Pallet",
            "description" => "Plataforma o caja abierta, generalmente de madera, en la que se conservan las mercancías para facilitar el manejo mecánico durante el transporte y almacenamiento.",
        ]);
        Unit::create([
            "code" => "XPY",
            "name" => "Placas con fleje/ agrupados/ armados",
        ]);
        Unit::create([
            "code" => "XPZ",
            "name" => "Tablones con fleje/ agrupados/ armados",
        ]);
        Unit::create([
            "code" => "XQA",
            "name" => "Tambor de acero con cabeza no desmontable",
        ]);
        Unit::create([
            "code" => "XQB",
            "name" => "Tambor de  acero con cabeza extraíble",
        ]);
        Unit::create([
            "code" => "XQC",
            "name" => "Tambor de aluminio con cabeza no extraíble",
        ]);
        Unit::create([
            "code" => "XQD",
            "name" => "Tambor de aluminio con cabeza extraíble",
        ]);
        Unit::create([
            "code" => "XQF",
            "name" => "Tambor, plástico con cabeza no desmontable",
        ]);
        Unit::create([
            "code" => "XQG",
            "name" => "Tambor, plástico, cabeza extraíble",
        ]);
        Unit::create([
            "code" => "XQH",
            "name" => "Barril de madera con tapón",
        ]);
        Unit::create([
            "code" => "XQJ",
            "name" => "Barril de madera con cabeza desprendible",
        ]);
        Unit::create([
            "code" => "XQK",
            "name" => "Bcodeón de acero con cabeza no desmontable",
        ]);
        Unit::create([
            "code" => "XQL",
            "name" => "Bcodeón de acero con cabeza desmontable",
        ]);
        Unit::create([
            "code" => "XQM",
            "name" => "Bcodeón de plástico con cabeza no desmontable",
        ]);
        Unit::create([
            "code" => "XQN",
            "name" => "Bcodeón de plástico con cabeza extraíble",
        ]);
        Unit::create([
            "code" => "XQP",
            "name" => "Caja de madera natural estándar",
        ]);
        Unit::create([
            "code" => "XQQ",
            "name" => "Caja de madera natural con muros a prueba de filtraciones",
        ]);
        Unit::create([
            "code" => "XQR",
            "name" => "Caja de plástico expandcodea",
        ]);
        Unit::create([
            "code" => "XQS",
            "name" => "Caja de plástico sólcodea",
        ]);
        Unit::create([
            "code" => "XRD",
            "name" => "Rod",
        ]);
        Unit::create([
            "code" => "XRG",
            "name" => "Anillo",
        ]);
        Unit::create([
            "code" => "XRJ",
            "name" => "Estante, Perchero para ropa",
        ]);
        Unit::create([
            "code" => "XRK",
            "name" => "Estante",
        ]);
        Unit::create([
            "code" => "XRL",
            "name" => "Carrete",
            "description" => "Dispositivo giratorio cilíndrico con un reborde en cada extremo en el que se enrollan los materiales.",
        ]);
        Unit::create([
            "code" => "XRO",
            "name" => "Rollo",
        ]);
        Unit::create([
            "code" => "XRT",
            "name" => "Red Roja",
            "description" => "Material de confinamiento hecho de redes de malla roja para retener artículos (por ejemplo árboles).",
        ]);
        Unit::create([
            "code" => "XRZ",
            "name" => "Varillas  con fleje/ agrupados/ armados",
        ]);
        Unit::create([
            "code" => "XSA",
            "name" => "Saco",
        ]);
        Unit::create([
            "code" => "XSB",
            "name" => "Losa",
        ]);
        Unit::create([
            "code" => "XSC",
            "name" => "Cajón poco profundo",
        ]);
        Unit::create([
            "code" => "XSD",
            "name" => "Huso",
        ]);
        Unit::create([
            "code" => "XSE",
            "name" => "Baúl",
        ]);
        Unit::create([
            "code" => "XSH",
            "name" => "Bolsa pequeña hermética",
        ]);
        Unit::create([
            "code" => "XSI",
            "name" => "Patín",
            "description" => "Una plataforma o plataforma móvil baja para facilitar el manejo y transporte de mercancías.",
        ]);
        Unit::create([
            "code" => "XSK",
            "name" => "Carcasa esqueleto",
        ]);
        Unit::create([
            "code" => "XSL",
            "name" => "Hoja de deslizamiento",
            "description" => "Láminas de plástico duro se utilizan principalmente como la base sobre la cual apilan mercancías para optimizar el espacio dentro de un contenedor. Puede utilizarse como alternativa a un embalaje paletizado.",
        ]);
        Unit::create([
            "code" => "XSM",
            "name" => "Hoja de metal",
        ]);
        Unit::create([
            "code" => "XSO",
            "name" => "Carrete pequeño",
            "description" => "Contenedor de empaque utilizado en el transporte de artículos tales como alambre, cable, cinta e hilo.",
        ]);
        Unit::create([
            "code" => "XSP",
            "name" => "Hoja de empaque de plástico",
        ]);
        Unit::create([
            "code" => "XSS",
            "name" => "Cajón de acero",
        ]);
        Unit::create([
            "code" => "XSU",
            "name" => "Maleta",
        ]);
        Unit::create([
            "code" => "XSV",
            "name" => "Sobre de acero",
        ]);
        Unit::create([
            "code" => "XSW",
            "name" => "Envoltorio",
            "description" => "Mercancías retencodeas en una película de plástico transparente que ha scodeo envuelta alrededor y luego encogcodeo fuertemente a las mercancías.",
        ]);
        Unit::create([
            "code" => "XSY",
            "name" => "Manga",
        ]);
        Unit::create([
            "code" => "XSZ",
            "name" => "Hojas  con fleje/ agrupados/ armados",
        ]);
        Unit::create([
            "code" => "XT1",
            "name" => "Tableta",
            "description" => "Artículo suelto o sin empaque en forma de barra, bloque o pieza.",
        ]);
        Unit::create([
            "code" => "XTB",
            "name" => "Tina",
        ]);
        Unit::create([
            "code" => "XTC",
            "name" => "Caja para té",
        ]);
        Unit::create([
            "code" => "XTD",
            "name" => "Tubo plegable",
        ]);
        Unit::create([
            "code" => "XTG",
            "name" => "Contenedor de tanque genérico",
            "description" => "Recipiente especialmente construcodeo para el transporte de líqucodeos y gases a granel.",
        ]);
        Unit::create([
            "code" => "XTI",
            "name" => "Tierce",
            "description" => "Barril de 1/6 parte de tonel",
        ]);
        Unit::create([
            "code" => "XTK",
            "name" => "Tanque rectangular",
        ]);
        Unit::create([
            "code" => "XTL",
            "name" => "Tina con tapa",
        ]);
        Unit::create([
            "code" => "XTN",
            "name" => "Hojalata",
        ]);
        Unit::create([
            "code" => "XTO",
            "name" => "Tonel",
            "description" => "Barril con capaccodead para 982 litros",
        ]);
        Unit::create([
            "code" => "XTR",
            "name" => "Maletero",
        ]);
        Unit::create([
            "code" => "XTS",
            "name" => "Estructura",
        ]);
        Unit::create([
            "code" => "XTT",
            "name" => "Bolsa de mano",
            "description" => "Una gran bolsa o cesto.",
        ]);
        Unit::create([
            "code" => "XTU",
            "name" => "Tubo",
        ]);
        Unit::create([
            "code" => "XTV",
            "name" => "Tubo con boquilla",
            "description" => "Tubo de plástico, metal o cartón, provisto de una boquilla, que contiene un producto líqucodeo o semilíqucodeo, por ejemplo silicio.",
        ]);
        Unit::create([
            "code" => "XTW",
            "name" => "Pallet tricapa",
            "description" => "Una paleta ligera hecha de cartón ondulado resistente.",
        ]);
        Unit::create([
            "code" => "XTY",
            "name" => "Tanque cilíndrico",
        ]);
        Unit::create([
            "code" => "XTZ",
            "name" => "Tubos  con fleje/ agrupados/ armados",
        ]);
        Unit::create([
            "code" => "XUC",
            "name" => "Sin empaque",
        ]);
        Unit::create([
            "code" => "XUN",
            "name" => "Uncodead",
            "description" => "Tipo de paquete compuesto de un solo artículo u objeto, no especificado de otro modo como una uncodead de equipo de transporte.",
        ]);
        Unit::create([
            "code" => "XVA",
            "name" => "Tanque",
        ]);
        Unit::create([
            "code" => "XVG",
            "name" => "Tanque de gas (a 1,031 mbar y 15° C)",
        ]);
        Unit::create([
            "code" => "XVI",
            "name" => "Frasco pequeño",
        ]);
        Unit::create([
            "code" => "XVK",
            "name" => "Paquete transportable",
            "description" => "Tipo de cajón de madera.",
        ]);
        Unit::create([
            "code" => "XVL",
            "name" => "Contenedor para líqucodeos a granel",
        ]);
        Unit::create([
            "code" => "XVN",
            "name" => "Vehículo",
            "description" => "Medio de transporte autopropulsado.",
        ]);
        Unit::create([
            "code" => "XVO",
            "name" => "Contenedor para sólcodeo de partículas grandes a granel (\"nódulos\")",
        ]);
        Unit::create([
            "code" => "XVP",
            "name" => "Envasado al vacío",
        ]);
        Unit::create([
            "code" => "XVQ",
            "name" => "Tanque para Gas licuado (a temperatura / presión anormal)",
        ]);
        Unit::create([
            "code" => "XVR",
            "name" => "Contenedor para sólcodeos de partículas granulares a granel (Granos)",
        ]);
        Unit::create([
            "code" => "XVS",
            "name" => "Contenedor de chatarra a granel",
            "description" => "Chatarra suelta o sin empaquetar transportada a granel.",
        ]);
        Unit::create([
            "code" => "XVY",
            "name" => "Contenedor para sólcodeo de partículas finas a granel (\"polvos\")",
        ]);
        Unit::create([
            "code" => "XWA",
            "name" => "Contenedor de granel intermedio",
            "description" => "Recipiente reutilizable hecho de metal, plástico, nameiles, madera o materiales compuestos utilizados para facilitar el transporte de sólcodeos y líqucodeos a granel en volúmenes manejables.",
        ]);
        Unit::create([
            "code" => "XWB",
            "name" => "Botella de mimbre",
        ]);
        Unit::create([
            "code" => "XWC",
            "name" => "Contenedor intermedio para gráneles y de acero",
        ]);
        Unit::create([
            "code" => "XWD",
            "name" => "Contenedor intermedio para gráneles y de aluminio",
        ]);
        Unit::create([
            "code" => "XWF",
            "name" => "Contenedor intermedio para gráneles y de metal",
        ]);
        Unit::create([
            "code" => "XWG",
            "name" => "Contenedor intermedio para gráneles y de acero presurizado menor a 10 kpa",
        ]);
        Unit::create([
            "code" => "XWH",
            "name" => "Contenedor intermedio para gráneles y de aluminio, presurizado menor a 10 kpa",
        ]);
        Unit::create([
            "code" => "XWJ",
            "name" => "Contenedor intermedio para gráneles y de metal con una presión de 10 kpa",
        ]);
        Unit::create([
            "code" => "XWK",
            "name" => "Contenedor intermedio para gráneles y de acero para líqucodeo",
        ]);
        Unit::create([
            "code" => "XWL",
            "name" => "Contenedor intermedio para gráneles y de aluminio para líqucodeo",
        ]);
        Unit::create([
            "code" => "XWM",
            "name" => "Contenedor intermedio para gráneles y de metal para líqucodeo",
        ]);
        Unit::create([
            "code" => "XWN",
            "name" => "Contenedor intermedio para gráneles con tejcodeo plástico sin capa con revestimiento",
        ]);
        Unit::create([
            "code" => "XWP",
            "name" => "Contenedor intermedio para gráneles con tejcodeo plástico y recubierto",
        ]);
        Unit::create([
            "code" => "XWQ",
            "name" => "Contenedor intermedio para gráneles con tejcodeo plástico con revestimiento",
        ]);
        Unit::create([
            "code" => "XWR",
            "name" => "Contenedor intermedio para gráneles con tejcodeo plástico, revestcodeo y con forro",
        ]);
        Unit::create([
            "code" => "XWS",
            "name" => "Contenedor intermedio para gráneles con película de plástico",
        ]);
        Unit::create([
            "code" => "XWT",
            "name" => "Contenedor intermedio para gráneles nameil sin capa / forro",
        ]);
        Unit::create([
            "code" => "XWU",
            "name" => "Contenedor intermedio para gráneles de madera natural con forro interior",
        ]);
        Unit::create([
            "code" => "XWV",
            "name" => "Contenedor intermedio para gráneles nameil recubierto",
        ]);
        Unit::create([
            "code" => "XWW",
            "name" => "Contenedor intermedio para gráneles nameil con revestimiento",
        ]);
        Unit::create([
            "code" => "XWX",
            "name" => "Contenedor intermedio para gráneles nameil recubierto y con forro",
        ]);
        Unit::create([
            "code" => "XWY",
            "name" => "Contenedor intermedio para gráneles contrachapado con revestimiento interior",
        ]);
        Unit::create([
            "code" => "XWZ",
            "name" => "Contenedor intermedio para gráneles de madera reconstitucodea con revestimiento interior",
        ]);
        Unit::create([
            "code" => "XXA",
            "name" => "Bolsa de tejcodeo plástico, sin abrigo interior ni forro",
        ]);
        Unit::create([
            "code" => "XXB",
            "name" => "Bolsa de tejcodeo plástico a prueba de filtraciones",
        ]);
        Unit::create([
            "code" => "XXC",
            "name" => "Bolsa de tejcodeo plástico resistente al agua",
        ]);
        Unit::create([
            "code" => "XXD",
            "name" => "Bolsa con película de plástico",
        ]);
        Unit::create([
            "code" => "XXF",
            "name" => "Bolsa nameil sin capa ni forro interior",
        ]);
        Unit::create([
            "code" => "XXG",
            "name" => "Bolsa nameil a prueba de filtraciones",
        ]);
        Unit::create([
            "code" => "XXH",
            "name" => "Bolsa nameil resistente al agua",
        ]);
        Unit::create([
            "code" => "XXJ",
            "name" => "Bolsa de papel multi-pared",
        ]);
        Unit::create([
            "code" => "XXK",
            "name" => "Bolsa de papel multi-pared, resistente al agua",
        ]);
        Unit::create([
            "code" => "XYA",
            "name" => "Empaque compuesto, recipiente de plástico en tambor de acero",
        ]);
        Unit::create([
            "code" => "XYB",
            "name" => "Empaque compuesto, recipiente de plástico en cajas de acero",
        ]);
        Unit::create([
            "code" => "XYC",
            "name" => "Empaque compuesto, recipiente de plástico en tambor de aluminio",
        ]);
        Unit::create([
            "code" => "XYD",
            "name" => "Empaque compuesto, recipiente de plástico en cajón de aluminio",
        ]);
        Unit::create([
            "code" => "XYF",
            "name" => "Empaque compuesto, recipiente de plástico en caja de madera",
        ]);
        Unit::create([
            "code" => "XYG",
            "name" => "Empaque compuesto, recipiente de plástico en tambor de madera contrachapada",
        ]);
        Unit::create([
            "code" => "XYH",
            "name" => "Empaque compuesto, recipiente de plástico en caja de madera contrachapada",
        ]);
        Unit::create([
            "code" => "XYJ",
            "name" => "Empaque compuesto, recipiente de plástico en tambor de fibra",
        ]);
        Unit::create([
            "code" => "XYK",
            "name" => "Empaque compuesto, recipiente de plástico en caja de cartón",
        ]);
        Unit::create([
            "code" => "XYL",
            "name" => "Empaque compuesto, recipiente de plástico en el tambor de plástico",
        ]);
        Unit::create([
            "code" => "XYM",
            "name" => "Empaque compuesto, recipiente de plástico en caja de plástico sólcodeo",
        ]);
        Unit::create([
            "code" => "XYN",
            "name" => "Empaque compuesto, receptáculo de vcoderio en tambor de acero",
        ]);
        Unit::create([
            "code" => "XYP",
            "name" => "Empaque compuesto, receptáculo de vcoderio en caja de cajas de acero",
        ]);
        Unit::create([
            "code" => "XYQ",
            "name" => "Empaque compuesto, recipiente de vcoderio en tambor de aluminio",
        ]);
        Unit::create([
            "code" => "XYR",
            "name" => "Empaque compuesto, receptáculo de vcoderio en caja de aluminio",
        ]);
        Unit::create([
            "code" => "XYS",
            "name" => "Empaque compuesto, recipiente de vcoderio en caja de madera",
        ]);
        Unit::create([
            "code" => "XYT",
            "name" => "Empaque compuesto, recipiente de vcoderio en tambor de madera contrachapada",
        ]);
        Unit::create([
            "code" => "Xyv",
            "name" => "Empaque compuesto, recipiente de vcoderio en el cesto de mimbre",
        ]);
        Unit::create([
            "code" => "XYW",
            "name" => "Empaque compuesto, recipiente de vcoderio en tambor de fibra",
        ]);
        Unit::create([
            "code" => "XYX",
            "name" => "Empaque compuesto, recipiente de vcoderio en caja de cartón",
        ]);
        Unit::create([
            "code" => "XYY",
            "name" => "Empaque compuesto, recipiente de vcoderio en paquete de plástico expandible",
        ]);
        Unit::create([
            "code" => "XYZ",
            "name" => "Empaque compuesto, recipiente de vcoderio en paquete de plástico sólcodeo",
        ]);
        Unit::create([
            "code" => "XZA",
            "name" => "Contenedor de granel intermedio, papel, multi-pared",
        ]);
        Unit::create([
            "code" => "XZB",
            "name" => "Bolsa grande",
        ]);
        Unit::create([
            "code" => "XZC",
            "name" => "Contenedor intermedio para gráneles de papel, multi-pared y resistente al agua",
        ]);
        Unit::create([
            "code" => "XZD",
            "name" => "Contenedor intermedio para gráneles de plástico rígcodeo, con equipo estructural para sólcodeos",
        ]);
        Unit::create([
            "code" => "XZF",
            "name" => "Contenedor intermedio para gráneles de plástico rígcodeo, autoportante para sólcodeos",
        ]);
        Unit::create([
            "code" => "XZG",
            "name" => "Contenedor intermedio para gráneles de plástico rígcodeo, con equipo estructural, presurizado",
        ]);
        Unit::create([
            "code" => "XZH",
            "name" => "Contenedor intermedio para gráneles de plástico rígcodeo, autoportante y presurizado",
        ]);
        Unit::create([
            "code" => "XZJ",
            "name" => "Contenedor intermedio para gráneles de plástico rígcodeo, con equipo estructural para líqucodeos",
        ]);
        Unit::create([
            "code" => "XZK",
            "name" => "Contenedor intermedio para gráneles de plástico rígcodeo, autoportante, líqucodeos",
        ]);
        Unit::create([
            "code" => "XZL",
            "name" => "Contenedor intermedio para gráneles, compuesto y de plástico rígcodeo, sólcodeos",
        ]);
        Unit::create([
            "code" => "XZM",
            "name" => "Contenedor intermedio para gráneles, compuesto y de plástico flexible, sólcodeos",
        ]);
        Unit::create([
            "code" => "XZN",
            "name" => "Contenedor intermedio para gráneles, compuesto y de plástico rígcodeo, presurizado",
        ]);
        Unit::create([
            "code" => "XZP",
            "name" => "Contenedor intermedio para gráneles, compuesto y de plástico flexible, presurizado",
        ]);
        Unit::create([
            "code" => "XZQ",
            "name" => "Contenedor intermedio para gráneles, compuesto y de plástico rígcodeo, líqucodeos",
        ]);
        Unit::create([
            "code" => "XZR",
            "name" => "Contenedor intermedio para gráneles, compuesto y de plástico flexible para líqucodeos",
        ]);
        Unit::create([
            "code" => "XZS",
            "name" => "Contenedor intermedio para gráneles, compuesto",
        ]);
        Unit::create([
            "code" => "XZT",
            "name" => "Contenedor intermedio para gráneles con tablero de fibras",
        ]);
        Unit::create([
            "code" => "XZU",
            "name" => "Contenedor intermedio para gráneles flexible",
        ]);
        Unit::create([
            "code" => "XZV",
            "name" => "Contenedor intermedio para gráneles de metal, distinto del acero",
        ]);
        Unit::create([
            "code" => "XZW",
            "name" => "Contenedor intermedio para gráneles, de madera natural",
        ]);
        Unit::create([
            "code" => "XZX",
            "name" => "Contenedor intermedio para gráneles, de contrachapado",
        ]);
        Unit::create([
            "code" => "XZY",
            "name" => "Contenedor intermedio para gráneles, de madera reconstitucodea",
        ]);
        Unit::create([
            "code" => "YDK",
            "name" => "Yarda cuadrada",
            "description" => "Es una uncodead anglosajona de superficie de una yarda de lado. ",
            "simbol" => "yd²",
        ]);
        Unit::create([
            "code" => "YDQ",
            "name" => "Yarda cúbica",
            "simbol" => "yd³",
        ]);
        Unit::create([
            "code" => "YL",
            "name" => "Cien yardas lineales",
        ]);
        Unit::create([
            "code" => "YRD",
            "name" => "Yarda",
            "description" => "Es la uncodead de longitud básica en los sistemas de medcodea utilizados en Estados Uncodeos, Panamá y Reino Uncodeo.\r\nEquivale a 91.4 centímetros.",
            "simbol" => "yd",
        ]);
        Unit::create([
            "code" => "YT",
            "name" => "Diez yardas",
        ]);
        Unit::create([
            "code" => "Z1",
            "name" => "Furgoneta",
        ]);
        Unit::create([
            "code" => "Z11",
            "name" => "Contenedor colgante ",
            "description" => "Uncodead de conteo que define el número de contenedores colgantes.",
        ]);
        Unit::create([
            "code" => "Z5",
            "name" => "Arrastre",
        ]);
        Unit::create([
            "code" => "Z6",
            "name" => "Punto de conferencia",
        ]);
        Unit::create([
            "code" => "Z8",
            "name" => "Página de noticias",
        ]);
        Unit::create([
            "code" => "ZP",
            "name" => "Páginas",
            "description" => "Uncodead de conteo que define el número de páginas",
        ]);
        Unit::create([
            "code" => "ZZ",
            "name" => "Mutuamente defincodeo",
            "description" => "Uncodead de medcodea acordada en común entre dos o más partes",
        ]);
    }
}
