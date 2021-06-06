let text = 'Introducción\n' +
    'La revolución solar es una carta astral y que se da en el momento y lugar en donde el sol termina de dar una vuelta entera al zodiaco desde su posición inicial de otra revolución solar o de la misma carta natal habiendo pasado un año. El periodo que rige es desde el momento en que se da un cumpleaños hasta el siguiente con una diferencia de horas en muchos casos.\n' +
    'Tanto en la revolución solar como en la revolución lunar se dan eventos en los que en la primera son trascendentales y que, sin embargo, en los eventos de la revolución lunar podemos ver cómo vamos progresando a través del año.\n' +
    'Este informe consiste en eventos personales descritos de acuerdo con una metodología. Existen 7 tipos de eventos, por un lado, los eventos del tipo 1, 2, 4 y 3, y los eventos del tipo 5, 6 y 7. El primer grupo se ve influenciado si el astro está retrógrado en la revolución lunar, el segundo grupo se ve influenciado si el astro está retrógrado en la carta natal. En el primer grupo y de forma individual (por cada astro) primero se da el evento del tipo 1, luego el evento del tipo 2 y después el evento del tipo 3, no de forma grupal. En el caso de los astros retrógrados en la revolución lunar estos no tienen eventos del tipo 2 y en cambio de este se da el evento del tipo 4, es decir que primero se da el evento del tipo 1, después el evento del tipo 4 y al final y con retraso (no dentro del tiempo de la revolución solar de forma completa) el evento del tipo 3. En el segundo grupo, primero se dan los eventos del tipo 5, después los del tipo 6 y 7, de forma individual. Usualmente el evento del tipo 3 coincide con el evento del tipo 7, el evento del tipo 2 y 4 coincide con el evento del tipo 6, y el evento del tipo 1 coincide con el evento del tipo 5.\n';

let text1 = 'Tabla de Importancias\n' +
    'A través de esta tabla podemos ver cuáles astros tienen eventos con mayor importancia. La columna PE (protagonismo evidente) es la más importante de todas, aunque para que sean muy importantes se debe tener también en cuenta los demás factores. La columna PI es el protagonismo interior. Las columnas CE e CI muestran si los eventos de los astros tienen una gran calidad evidente e interior respectivamente. Las columnas AE y AI muestran si las acciones principales de los eventos de cada astro son muy atractivos de forma evidente y de forma interior respectivamente. La columna B manifiesta la acción principal (beneficio) de los eventos del tipo 1, 2, 3 y 4 tienen una importancia muy especial, depende de la posición de las casas de la revolución (lunar o solar) en la carta natal para que se den valores en esta columna. La columna X muestra si la acción principal de los eventos del tipo 5, 6 y 7 tienen una importancia grande y especial. La columna RetNat muestra cuándo los eventos del tipo 7 de dichos astros serán desfavorables cuando aparece una R, si no aparece nada esto quiere decir que el evento del tipo 7 del astro es favorable. En las columnas PE, PI, B y X un ‘+’ es más importante que en el caso que no lo tenga y habrá más importancia en los eventos de dichos astros en los que tengan un número alto acompañado, estos números van del 1 al 20. Las columnas EE y EI suceden con poca frecuencia si uno vive y nació en un lugar tropical, y se darán con más frecuencia si se vive y nace en zonas muy al norte o sur del planeta. La columna EE manifiesta si los eventos de dicho astro serán extraordinarios de manera evidente, y la columna EI manifiesta si los eventos de dicho astro serán extraordinarios de manera interior.';




//'Astro</td> <td> |PE | PI | CE | CI | AE | AI | B | X | EE | EI | RetNat |>'

let jsonFilasDeTablaImportancias = { "1A": "Sol", "2A": "Luna", "3A": "Mercurio", "4A": "Venus", "5A": "Marte", "6A": "Júpiter", "7A": "Saturno", "8A": "Urano", "9A": "Neptuno", "10A": "Plutón", "11A": "Nodo Norte Real", "36A": "Nodo Sur Real", "12A": "Quirón", "13A": "Lilith", "34A": "Sol Negro", "14A": "Vertex", "35A": "Antivertex", "15A": "Ceres", "16A": "Palas", "17A": "Juno", "18A": "Vesta", "19A": "Eris", "40A": "Sol Blanco", "20A": "Luna Blanca", "21A": "Quaoar", "22A": "Sedna", "23A": "Varuna", "24A": "Nessus", "25A": "Waldemath Lilith", "39A": "Waldemath Priapus", "37A": "Sol Negro Real", "87A": "Lilith Real", "38A": "Lilith 2", "88A": "Sol Negro 2", "26A": "Hygeia", "27A": "Sylvia", "28A": "Hektor", "29A": "Europa", "30A": "Davida", "31A": "Interamnia", "32A": "Camilla", "33A": "Cybele", "41A": "Chariklo", "42A": "Iris", "43A": "Eunomia", "44A": "Euphrosyne", "45A": "Orcus", "46A": "Pholus", "47A": "Hermione", "48A": "Ixion", "49A": "Haumea", "50A": "Makemake", "51A": "Bamberga", "52A": "Patientia", "53A": "Thisbe", "54A": "Herculina", "55A": "Doris", "56A": "Ursula", "57A": "Eugenia", "58A": "Amphitrite", "59A": "Diotima", "60A": "Fortuna", "61A": "Egeria", "62A": "Themis", "63A": "Aurora", "64A": "Alauda", "65A": "Aletheia", "66A": "Palma", "67A": "Nemesis", "68A": "Psyche", "69A": "Hebe", "70A": "Lachesis", "71A": "Daphne", "72A": "Bertha", "73A": "Freia", "74A": "Winchester", "75A": "Hilda", "76A": "Pretoria", "77A": "Metis", "78A": "Aegle", "79A": "Kalliope", "80A": "Germania", "81A": "Prokne", "82A": "Stereoskopia", "83A": "Agamemnon", "84A": "Alexandra", "85A": "Siegena", "86A": "Elpis", "89A": "Vulcan", "90A": "Borasisi", "91A": "Lempo", "92A": "1998 SM165", "93A": "Ceto", "94A": "Teharonhiawako", "95A": "2000 OJ67", "96A": "Elektra", "97A": "Typhon", "98A": "Aspacia", "99A": "Chicago", "100A": "Loreley", "101A": "Gyptis", "102A": "Diomedes", "103A": "Kreusa", "104A": "Juewa", "105A": "Eunike", "106A": "Ino", "107A": "Ismene", "108A": "Merapi" };




let jsonDescripcion = {
    "Sol": {
        "Evento del Tipo 1": " Descripcion122",
        "Evento del Tipo 2": " Descripcion111",
        "Evento del Tipo 3": " Descripcion1",
        "Evento del Tipo 4": " Descripcion133",
        "Evento del Tipo 5": " Descripcion144",
        "Evento del Tipo 6": " Descripcion155",
        "Evento del Tipo 7": " Descripcion166"
    }, "Luna": {
        "Evento del Tipo 1": " Descripcion222",
        "Evento del Tipo 2": " Descripcion211",
        "Evento del Tipo 3": " Descripcion2",
        "Evento del Tipo 4": " Descripcion233",
        "Evento del Tipo 5": " Descripcion244",
        "Evento del Tipo 6": " Descripcion255",
        "Evento del Tipo 7": " Descripcion266"
    },
    "Mercurio": {
        "Evento del Tipo 1": " Descripcion322",
        "Evento del Tipo 2": " Descripcion311",
        "Evento del Tipo 3": " Descripcion3",
        "Evento del Tipo 4": " Descripcion333",
        "Evento del Tipo 5": " Descripcion344",
        "Evento del Tipo 6": " Descripcion355",
        "Evento del Tipo 7": " Descripcion366"
    },
    "Venus": {
        "Evento del Tipo 1": " Descripcion422",
        "Evento del Tipo 2": " Descripcion411",
        "Evento del Tipo 3": " Descripcion4",
        "Evento del Tipo 4": " Descripcion433",
        "Evento del Tipo 5": " Descripcion444",
        "Evento del Tipo 6": " Descripcion455",
        "Evento del Tipo 7": " Descripcion466"
    },
    "Marte": {
        "Evento del Tipo 1": " Descripcion522",
        "Evento del Tipo 2": " Descripcion511",
        "Evento del Tipo 3": " Descripcion5",
        "Evento del Tipo 4": " Descripcion533",
        "Evento del Tipo 5": " Descripcion544",
        "Evento del Tipo 6": " Descripcion555",
        "Evento del Tipo 7": " Descripcion566"
    },
    "Júpiter": {
        "Evento del Tipo 1": " Descripcion622",
        "Evento del Tipo 2": " Descripcion611",
        "Evento del Tipo 3": " Descripcion6",
        "Evento del Tipo 4": " Descripcion633",
        "Evento del Tipo 5": " Descripcion644",
        "Evento del Tipo 6": " Descripcion655",
        "Evento del Tipo 7": " Descripcion666"
    },
    "Saturno": {
        "Evento del Tipo 1": " Descripcion722",
        "Evento del Tipo 2": " Descripcion711",
        "Evento del Tipo 3": " Descripcion7",
        "Evento del Tipo 4": " Descripcion733",
        "Evento del Tipo 5": " Descripcion744",
        "Evento del Tipo 6": " Descripcion755",
        "Evento del Tipo 7": " Descripcion766"
    },
    "Urano": {
        "Evento del Tipo 1": " Descripcion822",
        "Evento del Tipo 2": " Descripcion811",
        "Evento del Tipo 3": " Descripcion8",
        "Evento del Tipo 4": " Descripcion833",
        "Evento del Tipo 5": " Descripcion844",
        "Evento del Tipo 6": " Descripcion855",
        "Evento del Tipo 7": " Descripcion866"
    },
    "Neptuno": {
        "Evento del Tipo 1": " Descripcion922",
        "Evento del Tipo 2": " Descripcion911",
        "Evento del Tipo 3": " Descripcion9",
        "Evento del Tipo 4": " Descripcion933",
        "Evento del Tipo 5": " Descripcion944",
        "Evento del Tipo 6": " Descripcion955",
        "Evento del Tipo 7": " Descripcion966"
    },
    "Plutón": {
        "Eventos del Tipo 1": " Descripcion1022",
        "Evento del Tipo 2": " Descripcion1011",
        "Evento del Tipo 3": " Descripcion10",
        "Evento del Tipo 4": " Descripcion1033",
        "Evento del Tipo 5": " Descripcion1044",
        "Evento del Tipo 6": " Descripcion1055",
        "Evento del Tipo 7": " Descripcion1066"
    },
    "Nodo Norte Real": {
        "Evento del Tipo 1": " Descripcion1122",
        "Evento del Tipo 2": " Descripcion1111",
        "Evento del Tipo 3": " Descripcion11",
        "Evento del Tipo 4": " Descripcion1133",
        "Evento del Tipo 5": " Descripcion1144",
        "Evento del Tipo 6": " Descripcion1155",
        "Evento del Tipo 7": " Descripcion1166"
    },
    "Nodo Sur Real": {
        "Evento del Tipo 1": " Descripcion3622",
        "Evento del Tipo 2": " Descripcion3611",
        "Evento del Tipo 3": " Descripcion36",
        "Evento del Tipo 4": " Descripcion3633",
        "Evento del Tipo 5": " Descripcion3644",
        "Evento del Tipo 6": " Descripcion3655",
        "Evento del Tipo 7": " Descripcion3666"
    },
    "Quirón": {
        "Evento del Tipo 1": " Descripcion1222",
        "Evento del Tipo 2": " Descripcion1211",
        "Evento del Tipo 3": " Descripcion12",
        "Evento del Tipo 4": " Descripcion1233",
        "Evento del Tipo 5": " Descripcion1244",
        "Evento del Tipo 6": " Descripcion1255",
        "Evento del Tipo 7": " Descripcion1266"
    },
    "Lilith": {
        "Evento del Tipo 1": " Descripcion1322",
        "Evento del Tipo 2": " Descripcion1311",
        "Evento del Tipo 3": " Descripcion13",
        "Evento del Tipo 4": " Descripcion1333",
        "Evento del Tipo 5": " Descripcion1344",
        "Evento del Tipo 6": " Descripcion1355",
        "Evento del Tipo 7": " Descripcion1366"
    },
    "Sol Negro": {
        "Evento del Tipo 1": " Descripcion3422",
        "Evento del Tipo 2": " Descripcion3411",
        "Evento del Tipo 3": " Descripcion34",
        "Evento del Tipo 4": " Descripcion3433",
        "Evento del Tipo 5": " Descripcion3444",
        "Evento del Tipo 6": " Descripcion3455",
        "Evento del Tipo 7": " Descripcion3466"
    },
    "Vertex": {
        "Evento del Tipo 1": " Descripcion1422",
        "Evento del Tipo 2": " Descripcion1411",
        "Evento del Tipo 3": " Descripcion14",
        "Evento del Tipo 4": " Descripcion1433",
        "Evento del Tipo 5": " Descripcion1444",
        "Evento del Tipo 6": " Descripcion1455",
        "Evento del Tipo 7": " Descripcion1466"
    },
    "Antivertex": {
        "Evento del Tipo 1": " Descripcion3522",
        "Evento del Tipo 2": " Descripcion3511",
        "Evento del Tipo 3": " Descripcion35",
        "Evento del Tipo 4": " Descripcion3533",
        "Evento del Tipo 5": " Descripcion3544",
        "Evento del Tipo 6": " Descripcion3555",
        "Evento del Tipo 7": " Descripcion3566"
    },
    "Ceres": {
        "Evento del Tipo 1": " Descripcion1522",
        "Evento del Tipo 2": " Descripcion1511",
        "Evento del Tipo 3": " Descripcion15",
        "Eventos del Tipo 4": " Descripcion1533",
        "Evento del Tipo 5": " Descripcion1544",
        "Evento del Tipo 6": " Descripcion1555",
        "Evento del Tipo 7": " Descripcion1566"
    },
    "Palas": {
        "Evento del Tipo 1": " Descripcion1622",
        "Evento del Tipo 2": " Descripcion1611",
        "Evento del Tipo 3": " Descripcion16",
        "Evento del Tipo 4": " Descripcion1633",
        "Evento del Tipo 5": " Descripcion1644",
        "Evento del Tipo 6": " Descripcion1655",
        "Evento del Tipo 7": " Descripcion1666"
    },
    "Juno": {
        "Evento del Tipo 1": " Descripcion1722",
        "Evento del Tipo 2": " Descripcion1711",
        "Evento del Tipo 3": " Descripcion17",
        "Evento del Tipo 4": " Descripcion1733",
        "Evento del Tipo 5": " Descripcion1744",
        "Evento del Tipo 6": " Descripcion1755",
        "Evento del Tipo 7": " Descripcion1766"
    },
    "Vesta": {
        "Evento del Tipo 1": " Descripcion1822",
        "Evento del Tipo 2": " Descripcion1811",
        "Evento del Tipo 3": " Descripcion18",
        "Evento del Tipo 4": " Descripcion1833",
        "Evento del Tipo 5": " Descripcion1844",
        "Evento del Tipo 6": " Descripcion1855",
        "Evento del Tipo 7": " Descripcion1866"
    },
    "Eris": {
        "Evento del Tipo 1": " Descripcion1922",
        "Evento del Tipo 2": " Descripcion1911",
        "Evento del Tipo 3": " Descripcion19",
        "Evento del Tipo 4": " Descripcion1933",
        "Evento del Tipo 5": " Descripcion1944",
        "Evento del Tipo 6": " Descripcion1955",
        "Evento del Tipo 7": " Descripcion1966"
    },
    "Sol Blanco": {
        "Evento del Tipo 1": " Descripcion4022",
        "Evento del Tipo 2": " Descripcion4011",
        "Evento del Tipo 3": " Descripcion40",
        "Evento del Tipo 4": " Descripcion4033",
        "Evento del Tipo 5": " Descripcion4044",
        "Evento del Tipo 6": " Descripcion4055",
        "Evento del Tipo 7": " Descripcion4066"
    },
    "Luna Blanca": {
        "Evento del Tipo 1": " Descripcion2022",
        "Evento del Tipo 2": " Descripcion2011",
        "Evento del Tipo 3": " Descripcion20",
        "Evento del Tipo 4": " Descripcion2033",
        "Evento del Tipo 5": " Descripcion2044",
        "Evento del Tipo 6": " Descripcion2055",
        "Evento del Tipo 7": " Descripcion2066"
    },
    "Quaoar": {
        "Evento del Tipo 1": " Descripcion2122",
        "Evento del Tipo 2": " Descripcion2111",
        "Evento del Tipo 3": " Descripcion21",
        "Evento del Tipo 4": " Descripcion2133",
        "Evento del Tipo 5": " Descripcion2144",
        "Evento del Tipo 6": " Descripcion2155",
        "Evento del Tipo 7": " Descripcion2166"
    },
    "Sedna": {
        "Evento del Tipo 1": " Descripcion2222",
        "Evento del Tipo 2": " Descripcion2211",
        "Evento del Tipo 3": " Descripcion22",
        "Evento del Tipo 4": " Descripcion2233",
        "Evento del Tipo 5": " Descripcion2244",
        "Evento del Tipo 6": " Descripcion2255",
        "Evento del Tipo 7": " Descripcion2266"
    },
    "Varuna": {
        "Evento del Tipo 1": " Descripcion2322",
        "Evento del Tipo 2": " Descripcion2311",
        "Evento del Tipo 3": " Descripcion23",
        "Evento del Tipo 4": " Descripcion2333",
        "Evento del Tipo 5": " Descripcion2344",
        "Evento del Tipo 6": " Descripcion2355",
        "Evento del Tipo 7": " Descripcion2366"
    },
    "Nessus": {
        "Evento del Tipo 1": " Descripcion2422",
        "Evento del Tipo 2": " Descripcion2411",
        "Evento del Tipo 3": " Descripcion24",
        "Evento del Tipo 4": " Descripcion2433",
        "Evento del Tipo 5": " Descripcion2444",
        "Evento del Tipo 6": " Descripcion2455",
        "Evento del Tipo 7": " Descripcion2466"
    },
    "Waldemath Lilith": {
        "Evento del Tipo 1": " Descripcion2522",
        "Evento del Tipo 2": " Descripcion2511",
        "Evento del Tipo 3": " Descripcion25",
        "Evento del Tipo 4": " Descripcion2533",
        "Evento del Tipo 5": " Descripcion2544",
        "Evento del Tipo 6": " Descripcion2555",
        "Evento del Tipo 7": " Descripcion2566"
    },
    "Waldemath Priapus": {
        "Evento del Tipo 1": " Descripcion3922",
        "Evento del Tipo 2": " Descripcion3911",
        "Evento del Tipo 3": " Descripcion39",
        "Evento del Tipo 4": " Descripcion3933",
        "Evento del Tipo 5": " Descripcion3944",
        "Evento del Tipo 6": " Descripcion3955",
        "Evento del Tipo 7": " Descripcion3966"
    },
    "Sol Negro Real": {
        "Evento del Tipo 1": " Descripcion3722",
        "Evento del Tipo 2": " Descripcion3711",
        "Evento del Tipo 3": " Descripcion37",
        "Evento del Tipo 4": " Descripcion3733",
        "Evento del Tipo 5": " Descripcion3744",
        "Evento del Tipo 6": " Descripcion3755",
        "Evento del Tipo 7": " Descripcion3766"
    },
    "Lilith Real": {
        "Evento del Tipo 1": " Descripcion8722",
        "Evento del Tipo 2": " Descripcion8711",
        "Evento del Tipo 3": " Descripcion87",
        "Evento del Tipo 4": " Descripcion8733",
        "Evento del Tipo 5": " Descripcion8744",
        "Evento del Tipo 6": " Descripcion8755",
        "Evento del Tipo 7": " Descripcion8766"
    },
    "Lilith 2": {
        "Evento del Tipo 1": " Descripcion3822",
        "Evento del Tipo 2": " Descripcion3811",
        "Evento del Tipo 3": " Descripcion38",
        "Evento del Tipo 4": " Descripcion3833",
        "Evento del Tipo 5": " Descripcion3844",
        "Evento del Tipo 6": " Descripcion3855",
        "Evento del Tipo 7": " Descripcion3866"
    },
    "Sol Negro 2": {
        "Evento del Tipo 1": " Descripcion8822",
        "Evento del Tipo 2": " Descripcion8811",
        "Evento del Tipo 3": " Descripcion88",
        "Evento del Tipo 4": " Descripcion8833",
        "Evento del Tipo 5": " Descripcion8844",
        "Evento del Tipo 6": " Descripcion8855",
        "Evento del Tipo 7": " Descripcion8866"
    },
    "Hygeia": {
        "Evento del Tipo 1": " Descripcion2622",
        "Evento del Tipo 2": " Descripcion2611",
        "Evento del Tipo 3": " Descripcion26",
        "Evento del Tipo 4": " Descripcion2633",
        "Evento del Tipo 5": " Descripcion2644",
        "Evento del Tipo 6": " Descripcion2655",
        "Evento del Tipo 7": " Descripcion2666"
    },
    "Sylvia": {
        "Evento del Tipo 1": " Descripcion2722",
        "Evento del Tipo 2": " Descripcion2711",
        "Evento del Tipo 3": " Descripcion27",
        "Evento del Tipo 4": " Descripcion2733",
        "Evento del Tipo 5": " Descripcion2744",
        "Evento del Tipo 6": " Descripcion2755",
        "Evento del Tipo 7": " Descripcion2766"
    },
    "Hektor": {
        "Evento del Tipo 1": " Descripcion2822",
        "Evento del Tipo 2": " Descripcion2811",
        "Evento del Tipo 3": " Descripcion28",
        "Evento del Tipo 4": " Descripcion2833",
        "Evento del Tipo 5": " Descripcion2844",
        "Evento del Tipo 6": " Descripcion2855",
        "Evento del Tipo 7": " Descripcion2866"
    },
    "Europa": {
        "Evento del Tipo 1": " Descripcion2922",
        "Evento del Tipo 2": " Descripcion2911",
        "Evento del Tipo 3": " Descripcion29",
        "Evento del Tipo 4": " Descripcion2933",
        "Evento del Tipo 5": " Descripcion2944",
        "Evento del Tipo 6": " Descripcion2955",
        "Evento del Tipo 7": " Descripcion2966"
    },
    "Davida": {
        "Evento del Tipo 1": " Descripcion3022",
        "Evento del Tipo 2": " Descripcion3011",
        "Evento del Tipo 3": " Descripcion30",
        "Evento del Tipo 4": " Descripcion3033",
        "Evento del Tipo 5": " Descripcion3044",
        "Evento del Tipo 6": " Descripcion3055",
        "Evento del Tipo 7": " Descripcion3066"
    },
    "Interamnia": {
        "Evento del Tipo 1": " Descripcion3122",
        "Evento del Tipo 2": " Descripcion3111",
        "Evento del Tipo 3": " Descripcion31",
        "Evento del Tipo 4": " Descripcion3133",
        "Eventos del Tipo 5": " Descripcion3144",
        "Evento del Tipo 6": " Descripcion3155",
        "Evento del Tipo 7": " Descripcion3166"
    },
    "Camilla": {
        "Evento del Tipo 1": " Descripcion3222",
        "Evento del Tipo 2": " Descripcion3211",
        "Evento del Tipo 3": " Descripcion32",
        "Evento del Tipo 4": " Descripcion3233",
        "Evento del Tipo 5": " Descripcion3244",
        "Evento del Tipo 6": " Descripcion3255",
        "Evento del Tipo 7": " Descripcion3266"
    },
    "Cybele": {
        "Evento del Tipo 1": " Descripcion3322",
        "Evento del Tipo 2": " Descripcion3311",
        "Evento del Tipo 3": " Descripcion33",
        "Evento del Tipo 4": " Descripcion3333",
        "Evento del Tipo 5": " Descripcion3344",
        "Evento del Tipo 6": " Descripcion3355",
        "Evento del Tipo 7": " Descripcion3366"
    },
    "Chariklo": {
        "Evento del Tipo 1": " Descripcion4122",
        "Evento del Tipo 2": " Descripcion4111",
        "Evento del Tipo 3": " Descripcion41",
        "Evento del Tipo 4": " Descripcion4133",
        "Evento del Tipo 5": " Descripcion4144",
        "Evento del Tipo 6": " Descripcion4155",
        "Evento del Tipo 7": " Descripcion4166"
    },
    "Iris": {
        "Evento del Tipo 1": " Descripcion4222",
        "Evento del Tipo 2": " Descripcion4211",
        "Evento del Tipo 3": " Descripcion42",
        "Evento del Tipo 4": " Descripcion4233",
        "Evento del Tipo 5": " Descripcion4244",
        "Evento del Tipo 6": " Descripcion4255",
        "Evento del Tipo 7": " Descripcion4266"
    },
    "Eunomia": {
        "Evento del Tipo 1": " Descripcion4322",
        "Evento del Tipo 2": " Descripcion4311",
        "Evento del Tipo 3": " Descripcion43",
        "Evento del Tipo 4": " Descripcion4333",
        "Evento del Tipo 5": " Descripcion4344",
        "Evento del Tipo 6": " Descripcion4355",
        "Evento del Tipo 7": " Descripcion4366"
    },
    "Euphrosyne": {
        "Evento del Tipo 1": " Descripcion4422",
        "Evento del Tipo 2": " Descripcion4411",
        "Evento del Tipo 3": " Descripcion44",
        "Evento del Tipo 4": " Descripcion4433",
        "Evento del Tipo 5": " Descripcion4444",
        "Evento del Tipo 6": " Descripcion4455",
        "Evento del Tipo 7": " Descripcion4466"
    },
    "Orcus": {
        "Evento del Tipo 1": " Descripcion4522",
        "Evento del Tipo 2": " Descripcion4511",
        "Evento del Tipo 3": " Descripcion45",
        "Evento del Tipo 4": " Descripcion4533",
        "Evento del Tipo 5": " Descripcion4544",
        "Evento del Tipo 6": " Descripcion4555",
        "Evento del Tipo 7": " Descripcion4566"
    },
    "Pholus": {
        "Evento del Tipo 1": " Descripcion4622",
        "Evento del Tipo 2": " Descripcion4611",
        "Evento del Tipo 3": " Descripcion46",
        "Evento del Tipo 4": " Descripcion4633",
        "Evento del Tipo 5": " Descripcion4644",
        "Evento del Tipo 6": " Descripcion4655",
        "Evento del Tipo 7": " Descripcion4666"
    },
    "Hermione": {
        "Evento del Tipo 1": " Descripcion4722",
        "Evento del Tipo 2": " Descripcion4711",
        "Evento del Tipo 3": " Descripcion47",
        "Evento del Tipo 4": " Descripcion4733",
        "Evento del Tipo 5": " Descripcion4744",
        "Evento del Tipo 6": " Descripcion4755",
        "Evento del Tipo 7": " Descripcion4766"
    },
    "Ixion": {
        "Evento del Tipo 1": " Descripcion4822",
        "Evento del Tipo 2": " Descripcion4811",
        "Evento del Tipo 3": " Descripcion48",
        "Evento del Tipo 4": " Descripcion4833",
        "Evento del Tipo 5": " Descripcion4844",
        "Evento del Tipo 6": " Descripcion4855",
        "Evento del Tipo 7": " Descripcion4866"
    },
    "Haumea": {
        "Evento del Tipo 1": " Descripcion4922",
        "Evento del Tipo 2": " Descripcion4911",
        "Evento del Tipo 3": " Descripcion49",
        "Evento del Tipo 4": " Descripcion4933",
        "Evento del Tipo 5": " Descripcion4944",
        "Evento del Tipo 6": " Descripcion4955",
        "Evento del Tipo 7": " Descripcion4966"
    },
    "Makemake": {
        "Evento del Tipo 1": " Descripcion5022",
        "Evento del Tipo 2": " Descripcion5011",
        "Evento del Tipo 3": " Descripcion50",
        "Evento del Tipo 4": " Descripcion5033",
        "Evento del Tipo 5": " Descripcion5044",
        "Evento del Tipo 6": " Descripcion5055",
        "Evento del Tipo 7": " Descripcion5066"
    },
    "Bamberga": {
        "Evento del Tipo 1": " Descripcion5122",
        "Evento del Tipo 2": " Descripcion5111",
        "Evento del Tipo 3": " Descripcion51",
        "Evento del Tipo 4": " Descripcion5133",
        "Evento del Tipo 5": " Descripcion4544",
        "Evento del Tipo 6": " Descripcion5155",
        "Evento del Tipo 7": " Descripcion5166"
    },
    "Patientia": {
        "Evento del Tipo 1": " Descripcion5222",
        "Evento del Tipo 2": " Descripcion5211",
        "Evento del Tipo 3": " Descripcion52",
        "Evento del Tipo 4": " Descripcion5233",
        "Evento del Tipo 5": " Descripcion5244",
        "Evento del Tipo 6": " Descripcion5255",
        "Evento del Tipo 7": " Descripcion5266"
    },
    "Thisbe": {
        "Evento del Tipo 1": " Descripcion5322",
        "Evento del Tipo 2": " Descripcion5311",
        "Evento del Tipo 3": " Descripcion53",
        "Evento del Tipo 4": " Descripcion5333",
        "Evento del Tipo 5": " Descripcion5344",
        "Evento del Tipo 6": " Descripcion5355",
        "Evento del Tipo 7": " Descripcion5366"
    },
    "Herculina": {
        "Evento del Tipo 1": " Descripcion5422",
        "Evento del Tipo 2": " Descripcion5411",
        "Eventos del Tipo 3": " Descripcion54",
        "Evento del Tipo 4": " Descripcion5433",
        "Evento del Tipo 5": " Descripcion5444",
        "Evento del Tipo 6": " Descripcion5455",
        "Evento del Tipo 7": " Descripcion5466"
    },
    "Doris": {
        "Evento del Tipo 1": " Descripcion5522",
        "Evento del Tipo 2": " Descripcion5511",
        "Eventos del Tipo 3": " Descripcion55",
        "Evento del Tipo 4": " Descripcion5533",
        "Evento del Tipo 5": " Descripcion5544",
        "Evento del Tipo 6": " Descripcion5555",
        "Evento del Tipo 7": " Descripcion5566"
    },
    "Ursula": {
        "Evento del Tipo 1": " Descripcion5622",
        "Evento del Tipo 2": " Descripcion5611",
        "Evento del Tipo 3": " Descripcion56",
        "Evento del Tipo 4": " Descripcion5633",
        "Evento del Tipo 5": " Descripcion5644",
        "Evento del Tipo 6": " Descripcion5655",
        "Evento del Tipo 7": " Descripcion5666"
    },
    "Eugenia": {
        "Evento del Tipo 1": " Descripcion5722",
        "Evento del Tipo 2": " Descripcion5711",
        "Evento del Tipo 3": " Descripcion57",
        "Evento del Tipo 4": " Descripcion5733",
        "Evento del Tipo 5": " Descripcion5744",
        "Evento del Tipo 6": " Descripcion5755",
        "Evento del Tipo 7": " Descripcion5766"
    },
    "Amphitrite": {
        "Evento del Tipo 1": " Descripcion5822",
        "Evento del Tipo 2": " Descripcion5811",
        "Evento del Tipo 3": " Descripcion58",
        "Evento del Tipo 4": " Descripcion5833",
        "Evento del Tipo 5": " Descripcion5244",
        "Eventos del Tipo 6": " Descripcion5855",
        "Evento del Tipo 7": " Descripcion5866"
    },
    "Diotima": {
        "Evento del Tipo 1": " Descripcion5922",
        "Evento del Tipo 2": " Descripcion5911",
        "Evento del Tipo 3": " Descripcion59",
        "Evento del Tipo 4": " Descripcion5933",
        "Evento del Tipo 5": " Descripcion5944",
        "Evento del Tipo 6": " Descripcion5955",
        "Evento del Tipo 7": " Descripcion5966"
    },
    "Fortuna": {
        "Evento del Tipo 1": " Descripcion6022",
        "Evento del Tipo 2": " Descripcion6011",
        "Evento del Tipo 3": " Descripcion60",
        "Evento del Tipo 4": " Descripcion6033",
        "Evento del Tipo 5": " Descripcion6044",
        "Evento del Tipo 6": " Descripcion6055",
        "Evento del Tipo 7": " Descripcion6066"
    },
    "Egeria": {
        "Evento del Tipo 1": " Descripcion6122",
        "Evento del Tipo 2": " Descripcion6111",
        "Evento del Tipo 3": " Descripcion61",
        "Evento del Tipo 4": " Descripcion6133",
        "Evento del Tipo 5": " Descripcion6144",
        "Evento del Tipo 6": " Descripcion6155",
        "Evento del Tipo 7": " Descripcion6166"
    },
    "Themis": {
        "Evento del Tipo 1": " Descripcion6222",
        "Evento del Tipo 2": " Descripcion6211",
        "Evento del Tipo 3": " Descripcion62",
        "Evento del Tipo 4": " Descripcion6233",
        "Evento del Tipo 5": " Descripcion6244",
        "Evento del Tipo 6": " Descripcion6255",
        "Evento del Tipo 7": " Descripcion6266"
    },
    "Aurora": {
        "Evento del Tipo 1": " Descripcion6322",
        "Evento del Tipo 2": " Descripcion6311",
        "Evento del Tipo 3": " Descripcion63",
        "Evento del Tipo 4": " Descripcion6333",
        "Evento del Tipo 5": " Descripcion6344",
        "Evento del Tipo 6": " Descripcion6355",
        "Evento del Tipo 7": " Descripcion6366"
    },
    "Alauda": {
        "Evento del Tipo 1": " Descripcion6422",
        "Evento del Tipo 2": " Descripcion6411",
        "Evento del Tipo 3": " Descripcion64",
        "Evento del Tipo 4": " Descripcion6433",
        "Evento del Tipo 5": " Descripcion6444",
        "Evento del Tipo 6": " Descripcion6455",
        "Evento del Tipo 7": " Descripcion6466"
    },
    "Aletheia": {
        "Evento del Tipo 1": " Descripcion6522",
        "Evento del Tipo 2": " Descripcion6511",
        "Evento del Tipo 3": " Descripcion65",
        "Evento del Tipo 4": " Descripcion6533",
        "Evento del Tipo 5": " Descripcion6544",
        "Evento del Tipo 6": " Descripcion6555",
        "Evento del Tipo 7": " Descripcion6566"
    },
    "Palma": {
        "Evento del Tipo 1": " Descripcion6622",
        "Evento del Tipo 2": " Descripcion6611",
        "Evento del Tipo 3": " Descripcion66",
        "Evento del Tipo 4": " Descripcion6633",
        "Evento del Tipo 5": " Descripcion6644",
        "Evento del Tipo 6": " Descripcion6655",
        "Evento del Tipo 7": " Descripcion6666"
    },
    "Nemesis": {
        "Evento del Tipo 1": " Descripcion6722",
        "Evento del Tipo 2": " Descripcion6711",
        "Evento del Tipo 3": " Descripcion67",
        "Evento del Tipo 4": " Descripcion6733",
        "Evento del Tipo 5": " Descripcion6744",
        "Evento del Tipo 6": " Descripcion6755",
        "Evento del Tipo 7": " Descripcion6766"
    },
    "Psyche": {
        "Evento del Tipo 1": " Descripcion6822",
        "Evento del Tipo 2": " Descripcion6811",
        "Evento del Tipo 3": " Descripcion68",
        "Evento del Tipo 4": " Descripcion6833",
        "Evento del Tipo 5": " Descripcion6844",
        "Evento del Tipo 6": " Descripcion6855",
        "Evento del Tipo 7": " Descripcion6866"
    },
    "Hebe": {
        "Evento del Tipo 1": " Descripcion6922",
        "Evento del Tipo 2": " Descripcion6911",
        "Evento del Tipo 3": " Descripcion69",
        "Evento del Tipo 4": " Descripcion6933",
        "Evento del Tipo 5": " Descripcion6944",
        "Evento del Tipo 6": " Descripcion6955",
        "Evento del Tipo 7": " Descripcion6966"
    },
    "Lachesis": {
        "Evento del Tipo 1": " Descripcion7022",
        "Evento del Tipo 2": " Descripcion7011",
        "Evento del Tipo 3": " Descripcion70",
        "Evento del Tipo 4": " Descripcion7033",
        "Evento del Tipo 5": " Descripcion7044",
        "Evento del Tipo 6": " Descripcion7055",
        "Evento del Tipo 7": " Descripcion7066"
    },
    "Daphne": {
        "Evento del Tipo 1": " Descripcion7122",
        "Evento del Tipo 2": " Descripcion7111",
        "Evento del Tipo 3": " Descripcion71",
        "Evento del Tipo 4": " Descripcion7133",
        "Evento del Tipo 5": " Descripcion7144",
        "Evento del Tipo 6": " Descripcion7155",
        "Evento del Tipo 7": " Descripcion7166"
    },
    "Bertha": {
        "Evento del Tipo 1": " Descripcion7222",
        "Evento del Tipo 2": " Descripcion7211",
        "Evento del Tipo 3": " Descripcion72",
        "Evento del Tipo 4": " Descripcion7233",
        "Evento del Tipo 5": " Descripcion7244",
        "Evento del Tipo 6": " Descripcion7255",
        "Evento del Tipo 7": " Descripcion7266"
    },
    "Freia": {
        "Evento del Tipo 1": " Descripcion7322",
        "Evento del Tipo 2": " Descripcion7311",
        "Evento del Tipo 3": " Descripcion73",
        "Evento del Tipo 4": " Descripcion7333",
        "Evento del Tipo 5": " Descripcion7344",
        "Evento del Tipo 6": " Descripcion7355",
        "Evento del Tipo 7": " Descripcion7366"
    },
    "Winchester": {
        "Evento del Tipo 1": " Descripcion7422",
        "Evento del Tipo 2": " Descripcion7411",
        "Evento del Tipo 3": " Descripcion74",
        "Evento del Tipo 4": " Descripcion7433",
        "Evento del Tipo 5": " Descripcion7444",
        "Evento del Tipo 6": " Descripcion7455",
        "Evento del Tipo 7": " Descripcion7466"
    },
    "Hilda": {
        "Evento del Tipo 1": " Descripcion7522",
        "Evento del Tipo 2": " Descripcion7511",
        "Evento del Tipo 3": " Descripcion75",
        "Evento del Tipo 4": " Descripcion7533",
        "Evento del Tipo 5": " Descripcion7544",
        "Evento del Tipo 6": " Descripcion7555",
        "Evento del Tipo 7": " Descripcion7566"
    },
    "Pretoria": {
        "Evento del Tipo 1": " Descripcion7622",
        "Evento del Tipo 2": " Descripcion7611",
        "Evento del Tipo 3": " Descripcion76",
        "Evento del Tipo 4": " Descripcion7633",
        "Evento del Tipo 5": " Descripcion7644",
        "Evento del Tipo 6": " Descripcion7655",
        "Evento del Tipo 7": " Descripcion7666"
    },
    "Metis": {
        "Evento del Tipo 1": " Descripcion7722",
        "Evento del Tipo 2": " Descripcion7711",
        "Evento del Tipo 3": " Descripcion77",
        "Evento del Tipo 4": " Descripcion7733",
        "Evento del Tipo 5": " Descripcion7744",
        "Evento del Tipo 6": " Descripcion7755",
        "Evento del Tipo 7": " Descripcion7766"
    },
    "Aegle": {
        "Evento del Tipo 1": " Descripcion7822",
        "Evento del Tipo 2": " Descripcion7811",
        "Evento del Tipo 3": " Descripcion78",
        "Evento del Tipo 4": " Descripcion7833",
        "Eventos del Tipo 5": " Descripcion7844",
        "Evento del Tipo 6": " Descripcion7855",
        "Evento del Tipo 7": " Descripcion7866"
    },
    "Kalliope": {
        "Evento del Tipo 1": " Descripcion7922",
        "Evento del Tipo 2": " Descripcion7911",
        "Evento del Tipo 3": " Descripcion79",
        "Evento del Tipo 4": " Descripcion7933",
        "Evento del Tipo 5": " Descripcion7944",
        "Evento del Tipo 6": " Descripcion7955",
        "Evento del Tipo 7": " Descripcion7966"
    },
    "Germania": {
        "Evento del Tipo 1": " Descripcion8022",
        "Evento del Tipo 2": " Descripcion8011",
        "Evento del Tipo 3": " Descripcion80",
        "Evento del Tipo 4": " Descripcion8033",
        "Evento del Tipo 5": " Descripcion8044",
        "Evento del Tipo 6": " Descripcion8055",
        "Evento del Tipo 7": " Descripcion8066"
    },
    "Prokne": {
        "Evento del Tipo 1": " Descripcion8122",
        "Evento del Tipo 2": " Descripcion8111",
        "Evento del Tipo 3": " Descripcion81",
        "Evento del Tipo 4": " Descripcion8133",
        "Evento del Tipo 5": " Descripcion8144",
        "Evento del Tipo 6": " Descripcion8155",
        "Evento del Tipo 7": " Descripcion8166"
    },
    "Stereoskopia": {
        "Evento del Tipo 1": " Descripcion8222",
        "Evento del Tipo 2": " Descripcion8211",
        "Evento del Tipo 3": " Descripcion82",
        "Evento del Tipo 4": " Descripcion8233",
        "Evento del Tipo 5": " Descripcion8244",
        "Evento del Tipo 6": " Descripcion8255",
        "Evento del Tipo 7": " Descripcion8266"
    },
    "Agamemnon": {
        "Evento del Tipo 1": " Descripcion8322",
        "Evento del Tipo 2": " Descripcion8311",
        "Evento del Tipo 3": " Descripcion83",
        "Evento del Tipo 4": " Descripcion8333",
        "Evento del Tipo 5": " Descripcion8344",
        "Evento del Tipo 6": " Descripcion8355",
        "Evento del Tipo 7": " Descripcion8366"
    },
    "Alexandra": {
        "Evento del Tipo 1": " Descripcion8422",
        "Evento del Tipo 2": " Descripcion8411",
        "Evento del Tipo 3": " Descripcion84",
        "Evento del Tipo 4": " Descripcion8433",
        "Evento del Tipo 5": " Descripcion8444",
        "Evento del Tipo 6": " Descripcion8455",
        "Evento del Tipo 7": " Descripcion8466"
    },
    "Siegena": {
        "Evento del Tipo 1": " Descripcion8522",
        "Evento del Tipo 2": " Descripcion8511",
        "Evento del Tipo 3": " Descripcion85",
        "Evento del Tipo 4": " Descripcion8533",
        "Evento del Tipo 5": " Descripcion8544",
        "Evento del Tipo 6": " Descripcion8555",
        "Evento del Tipo 7": " Descripcion8566"
    },
    "Elpis": {
        "Evento del Tipo 1": " Descripcion8622",
        "Evento del Tipo 2": " Descripcion8611",
        "Evento del Tipo 3": " Descripcion86",
        "Evento del Tipo 4": " Descripcion8633",
        "Evento del Tipo 5": " Descripcion8644",
        "Evento del Tipo 6": " Descripcion8655",
        "Evento del Tipo 7": " Descripcion8666"
    },
    "Vulcan": {
        "Evento del Tipo 1": " Descripcion8922",
        "Evento del Tipo 2": " Descripcion8911",
        "Evento del Tipo 3": " Descripcion89",
        "Evento del Tipo 4": " Descripcion8933",
        "Evento del Tipo 5": " Descripcion8944",
        "Evento del Tipo 6": " Descripcion8955",
        "Evento del Tipo 7": " Descripcion8966"
    },
    "Borasisi": {
        "Evento del Tipo 1": " Descripcion9022",
        "Evento del Tipo 2": " Descripcion9011",
        "Evento del Tipo 3": " Descripcion90",
        "Evento del Tipo 4": " Descripcion9033",
        "Evento del Tipo 5": " Descripcion9044",
        "Evento del Tipo 6": " Descripcion9055",
        "Evento del Tipo 7": " Descripcion9066"
    },
    "Lempo": {
        "Evento del Tipo 1": " Descripcion9122",
        "Evento del Tipo 2": " Descripcion9111",
        "Evento del Tipo 3": " Descripcion91",
        "Evento del Tipo 4": " Descripcion9133",
        "Evento del Tipo 5": " Descripcion9144",
        "Evento del Tipo 6": " Descripcion9155",
        "Evento del Tipo 7": " Descripcion9166"
    },
    "1998 SM165": {
        "Evento del Tipo 1": " Descripcion9222",
        "Evento del Tipo 2": " Descripcion9211",
        "Evento del Tipo 3": " Descripcion92",
        "Evento del Tipo 4": " Descripcion9233",
        "Evento del Tipo 5": " Descripcion9244",
        "Evento del Tipo 6": " Descripcion9255",
        "Evento del Tipo 7": " Descripcion9266"
    },
    "Ceto": {
        "Evento del Tipo 1": " Descripcion9322",
        "Evento del Tipo 2": " Descripcion9311",
        "Evento del Tipo 3": " Descripcion93",
        "Evento del Tipo 4": " Descripcion9333",
        "Evento del Tipo 5": " Descripcion9344",
        "Evento del Tipo 6": " Descripcion9355",
        "Evento del Tipo 7": " Descripcion9366"
    },
    "Teharonhiawako": {
        "Evento del Tipo 1": " Descripcion9422",
        "Evento del Tipo 2": " Descripcion9411",
        "Evento del Tipo 3": " Descripcion94",
        "Evento del Tipo 4": " Descripcion9433",
        "Evento del Tipo 5": " Descripcion9444",
        "Evento del Tipo 6": " Descripcion9455",
        "Evento del Tipo 7": " Descripcion9466"
    },
    "2000 OJ67": {
        "Evento del Tipo 1": " Descripcion9522",
        "Evento del Tipo 2": " Descripcion9511",
        "Evento del Tipo 3": " Descripcion95",
        "Evento del Tipo 4": " Descripcion9533",
        "Evento del Tipo 5": " Descripcion9544",
        "Evento del Tipo 6": " Descripcion9555",
        "Evento del Tipo 7": " Descripcion9566"
    },
    "Elektra": {
        "Evento del Tipo 1": " Descripcion9622",
        "Evento del Tipo 2": " Descripcion9611",
        "Evento del Tipo 3": " Descripcion96",
        "Evento del Tipo 4": " Descripcion9633",
        "Evento del Tipo 5": " Descripcion9644",
        "Evento del Tipo 6": " Descripcion9655",
        "Evento del Tipo 7": " Descripcion9666"
    },
    "Typhon": {
        "Evento del Tipo 1": " Descripcion9722",
        "Evento del Tipo 2": " Descripcion9711",
        "Evento del Tipo 3": " Descripcion97",
        "Evento del Tipo 4": " Descripcion9733",
        "Evento del Tipo 5": " Descripcion9744",
        "Evento del Tipo 6": " Descripcion9755",
        "Evento del Tipo 7": " Descripcion9766"
    },
    "Aspacia": {
        "Evento del Tipo 1": " Descripcion9822",
        "Evento del Tipo 2": " Descripcion9811",
        "Evento del Tipo 3": " Descripcion98",
        "Evento del Tipo 4": " Descripcion9833",
        "Evento del Tipo 5": " Descripcion9844",
        "Evento del Tipo 6": " Descripcion9855",
        "Evento del Tipo 7": " Descripcion9866"
    },
    "Chicago": {
        "Evento del Tipo 1": " Descripcion9922",
        "Evento del Tipo 2": " Descripcion9911",
        "Evento del Tipo 3": " Descripcion99",
        "Evento del Tipo 4": " Descripcion9933",
        "Evento del Tipo 5": " Descripcion9944",
        "Evento del Tipo 6": " Descripcion9955",
        "Evento del Tipo 7": " Descripcion9966"
    },
    "Loreley": {
        "Evento del Tipo 1": " Descripcion10022",
        "Evento del Tipo 2": " Descripcion10011",
        "Evento del Tipo 3": " Descripcion100",
        "Evento del Tipo 4": " Descripcion10033",
        "Evento del Tipo 5": " Descripcion10044",
        "Evento del Tipo 6": " Descripcion10055",
        "Evento del Tipo 7": " Descripcion10066"
    },
    "Gyptis": {
        "Evento del Tipo 1": " Descripcion10122",
        "Evento del Tipo 2": " Descripcion10111",
        "Evento del Tipo 3": " Descripcion101",
        "Evento del Tipo 4": " Descripcion10133",
        "Evento del Tipo 5": " Descripcion10144",
        "Evento del Tipo 6": " Descripcion10155",
        "Evento del Tipo 7": " Descripcion10166"
    },
    "Diomedes": {
        "Evento del Tipo 1": " Descripcion10222",
        "Evento del Tipo 2": " Descripcion10211",
        "Evento del Tipo 3": " Descripcion102",
        "Evento del Tipo 4": " Descripcion10233",
        "Evento del Tipo 5": " Descripcion10244",
        "Evento del Tipo 6": " Descripcion10255",
        "Evento del Tipo 7": " Descripcion10266"
    },
    "Kreusa": {
        "Evento del Tipo 1": " Descripcion10322",
        "Evento del Tipo 2": " Descripcion10311",
        "Evento del Tipo 3": " Descripcion103",
        "Evento del Tipo 4": " Descripcion10333",
        "Evento del Tipo 5": " Descripcion10344",
        "Evento del Tipo 6": " Descripcion10355",
        "Evento del Tipo 7": " Descripcion10366"
    },
    "Juewa": {
        "Evento del Tipo 1": " Descripcion10422",
        "Evento del Tipo 2": " Descripcion10411",
        "Evento del Tipo 3": " Descripcion104",
        "Evento del Tipo 4": " Descripcion10433",
        "Evento del Tipo 5": " Descripcion10444",
        "Evento del Tipo 6": " Descripcion10455",
        "Evento del Tipo 7": " Descripcion10466"
    },
    "Eunike": {
        "Evento del Tipo 1": " Descripcion10522",
        "Evento del Tipo 2": " Descripcion10511",
        "Evento del Tipo 3": " Descripcion105",
        "Evento del Tipo 4": " Descripcion10533",
        "Evento del Tipo 5": " Descripcion10544",
        "Evento del Tipo 6": " Descripcion10555",
        "Evento del Tipo 7": " Descripcion10566"
    },
    "Ino": {
        "Evento del Tipo 1": " Descripcion10622",
        "Evento del Tipo 2": " Descripcion10611",
        "Evento del Tipo 3": " Descripcion106",
        "Evento del Tipo 4": " Descripcion10633",
        "Evento del Tipo 5": " Descripcion10644",
        "Evento del Tipo 6": " Descripcion10655",
        "Evento del Tipo 7": " Descripcion10666"
    },
    "Ismene": {
        "Evento del Tipo 1": " Descripcion10722",
        "Evento del Tipo 2": " Descripcion10711",
        "Evento del Tipo 3": " Descripcion107",
        "Evento del Tipo 4": " Descripcion10733",
        "Evento del Tipo 5": " Descripcion10744",
        "Evento del Tipo 6": " Descripcion10755",
        "Evento del Tipo 7": " Descripcion10766"
    },
    "Merapi": {
        "Evento del Tipo 1": " Descripcion10822",
        "Evento del Tipo 2": " Descripcion10811",
        "Evento del Tipo 3": " Descripcion108",
        "Evento del Tipo 4": " Descripcion10833",
        "Evento del Tipo 5": " Descripcion10844",
        "Evento del Tipo 6": " Descripcion10855",
        "Evento del Tipo 7": " Descripcion10866"
    }
}





let numeroDeHoja = 1;
let bool = true;
setInterval(function () {
    if (bool) {
        $('#preloader2Msj').text("Por favor espere...");
        bool = false;
    } else {
        $('#preloader2Msj').text("Cargando Informe ...");
        bool = true;
    }
}, 3000);


let hoja = "";
let introduccion = "";
let promesas = -1;


function leerTextoporfila(parafoDeTexto, svg, svgXposicion, svgYposicion, titulo, bool) {
    parafosDeTexto = parafoDeTexto.split("\n");
    //        let svgXposicion = 0;
    //        let svgYposicion = 14;
    let textoDeHoja = "";
    let plantilla = svg;
    for (parafo in parafosDeTexto) {
        let palabras = parafosDeTexto[parafo].split(" ");
        let longitudDeCadena = 0;
        let cadena = "<tspan x=\"" + svgXposicion + "\" y=\"" + svgYposicion + "\">";


        for (palabra in palabras) {
            if (longitudDeCadena <= 69) {
                longitudDeCadena += palabras[palabra].length;
                cadena += (" " + palabras[palabra]);
                if (palabra == palabras.length - 1) {
                    textoDeHoja += (cadena += "</tspan>");
                    svgYposicion += 14;
                }
            } else {
                svgYposicion += 14;
                textoDeHoja += (cadena + "</tspan>");
                cadena = "<tspan x=\"" + svgXposicion + "\" y=\"" + svgYposicion + "\">" + palabras[palabra];
                longitudDeCadena = 0;

            }


        }
        svgYposicion += 14;
    }
    if (bool) {

        svg = svg.replace("_pajina", numeroDeHoja++);
        svg = svg.replace("titulo", titulo);
        svg = svg.replace("TextoAremplazar", textoDeHoja);
        let contenedor = document.getElementById("content");
        contenedor.innerHTML += ' <div class="row justify-content-center">' +
            '<div class="col-12 col-md-5 hoja">' + svg + '</div></div>';
    }
    return {
        "text": textoDeHoja,
        "y": svgYposicion
    };
}


function tablaDeimportancias(tabla, svg, svgXposicion, titulo,tipoDeinforme) {
    let svgYposicion = 14;
    let platilla = svg;
    let contenedor = document.getElementById("content");

    let textoDeHoja = "<tspan class=\"cls-bold \"  x=\"-55.8\">Astro</tspan><tspan class=\"cls-bold \" x=\"60.8\">|PE | PI | CE | CI | AE | AI | B | X | EE | EI | RetNat |</tspan>";
    for (row in jsonFilasDeTablaImportancias) {
        if (jsonFilasDeTablaImportancias[row] == "Sol Negro 2"&&!tipoDeinforme) break;
        if (tabla[row] != undefined) {

            if (svgYposicion == 476) {
                platilla = platilla.replace("_pajina", numeroDeHoja++);
                platilla = platilla.replace("titulo", titulo);
                platilla = platilla.replace("TextoAremplazar", textoDeHoja);
                contenedor.innerHTML += ' <div class="row justify-content-center">' +
                    '<div class="col-12 col-md-5 hoja">' + platilla + '</div></div>';
                svgYposicion = 14;
                textoDeHoja = "<tspan class=\"cls-bold \"  x=\"-55.8\">Astro</tspan><tspan class=\"cls-bold \" x=\"60.8\">|PE | PI | CE | CI | AE | AI | B | X | EE | EI | RetNat |</tspan>";
                platilla = svg;

            }
            textoDeHoja += "<a href=\"#" + jsonFilasDeTablaImportancias[row].replaceAll(" ","") + "\"><tspan  x=\"" + svgXposicion + "\" y=\"" + svgYposicion + "\">" + jsonFilasDeTablaImportancias[row] + "</tspan></a>";
            textoDeHoja += "<tspan x=\"" + (svgXposicion + 180) + "\" y=\"" + svgYposicion + "\">" + tabla[row] + "</tspan>";
            svgYposicion += 14;


        }
    }
    svg = svg.replace("_pajina", numeroDeHoja++);
    svg = svg.replace("titulo", titulo);
    svg = svg.replace("TextoAremplazar", textoDeHoja);
    contenedor.innerHTML += ' <div class="row justify-content-center">' +
        '<div class="col-12 col-md-5 hoja">' + svg + '</div></div>';

    //  contenedor.innerHTML = filasDeTablaDeImportancia;
}

function descripciones(descripciones, svg, titulo,tipoDeinforme) {

    let svgYposicion = 14;
    let plantilla = svg;
    let contenedor = document.getElementById("content");
    let textoDeHoja = "";

    for (descripcion in jsonDescripcion) {
        if (descripcion == "Sol Negro 2"&&!tipoDeinforme) break;
        textoDeHoja += "_titulo" + (descripcion + "\n");
        for (let i = 1; i < 8; i++) {
            let eventoTipoUno = (jsonDescripcion[descripcion]["Evento del Tipo " + i]);

            if (eventoTipoUno != undefined) {
                eventoTipoUno = eventoTipoUno.replace(" ", "");
                textoDeHoja += ("Evento Tipo " + i + "\n");
                textoDeHoja += (descripciones[eventoTipoUno] + "\n");
            }
        }
    }

    let parafosDeTexto = textoDeHoja.split("\n");
    textoDeHoja = "";
    cadenalength = 0;
    let cadenadetexto = "";
    let contenedorHtml = "";
    for (let i = 0; i < parafosDeTexto.length; i++) {
        let palabras = parafosDeTexto[i].split(" ");
        for (j in palabras) {
            cadenadetexto += palabras[j] + " ";
            cadenalength += palabras[j].length + 1;
            if (cadenalength >= 70) {
                cadenalength = 0;
                textoDeHoja += "<tspan x=\"-55\" y=\"" + svgYposicion + "\">" + cadenadetexto + "</tspan>\n";
                svgYposicion += 14;
                cadenadetexto = "";

                if (svgYposicion >= 462) {
                    plantilla = plantilla.replace("_pajina", numeroDeHoja++);
                    plantilla = plantilla.replace("titulo", titulo);
                    plantilla = plantilla.replace("TextoAremplazar", textoDeHoja);
                    contenedorHtml += ' <div class="row justify-content-center">' + '<div class="col-12 col-md-5 hoja">' + plantilla + '</div></div>';
                    plantilla = svg;
                    textoDeHoja = "";
                    svgYposicion = 14;
                }
            }


        }

        cadenalength = 0;
        if (cadenadetexto.includes("_titulo") || cadenadetexto.includes("Evento")) {
            let posDetitulo = cadenadetexto.includes("_titulo") ? 100 : 50;
            svgYposicion += 14;
            textoDeHoja += "<tspan class=\"pcls-5\" id=\"" + cadenadetexto.replace("_titulo", "").replaceAll(" ", "") + "\" x=\"" + posDetitulo + "\" y=\"" + svgYposicion + "\">" + cadenadetexto.replace("_titulo", "") + "</tspan>\n";
            svgYposicion += 14;
        } else {
            textoDeHoja += "<tspan x=\"-55\" y=\"" + svgYposicion + "\">" + cadenadetexto + "</tspan>\n";

        }

        svgYposicion += 14;
        cadenadetexto = "";
        if (svgYposicion >= 462) {

            plantilla = plantilla.replace("_pajina", numeroDeHoja++);
            plantilla = plantilla.replace("titulo", titulo);
            plantilla = plantilla.replace("TextoAremplazar", textoDeHoja);
            contenedorHtml += ' <div class="row justify-content-center ">' + '<div class="col-12 col-md-5  hoja">' + plantilla + '</div></div>';
            plantilla = svg;
            textoDeHoja = "";
            svgYposicion = 14;
        }
    }

    svg = svg.replace("_pajina", numeroDeHoja++);
    svg = svg.replace("titulo", titulo);
    svg = svg.replace("TextoAremplazar", textoDeHoja);

    contenedorHtml += ' <div class="row justify-content-center ">' +
        '<div class="col-12 col-md-5 hoja">' + svg + '</div></div>';
    contenedor.innerHTML += contenedorHtml;
}