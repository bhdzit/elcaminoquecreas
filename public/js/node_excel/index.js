const XLSX = require("xlsx");
const doc=require("./doc");
const express = require("express");
const app = express();
const bodyParser = require("body-parser");
const cors= require("cors");

app.use(bodyParser.urlencoded({ extended: false }));
//app.use(bodyParser.json());
app.use(cors())
app.listen(3700, () => {
    console.log("Servidor Funcionando");
});

app.get("/", (req, res) => {
   
    res.setHeader('Content-Type', 'application/json');
    res.end(leerHoja());
});
function leerHoja() {
    const workbook = XLSX.readFile("../../PrimordialRSyRLparaenviar2.xlsx");
    const workbookSheets = workbook.SheetNames;
    var first_sheet_name = workbook.SheetNames[4];
    //    var address_of_cell = ['N'];
    /* Get worksheet */
    var worksheet = workbook.Sheets[first_sheet_name];
    console.log("Obteniedno Informacion de Constalaciones");
    let datos="{";
    for (let i = 4,j=1; i < 112; i++,j++) {
        /* Find desired cell */
        var desired_cell = worksheet["N" + i];
        /* Get the value */
        var desired_value = (desired_cell ?"\""+ j+"A"+"\" : \""+desired_cell.v+"\"," : undefined);
        datos+=desired_value;
        //console.log(desired_value);
    }
    return datos+='"":""}';
}