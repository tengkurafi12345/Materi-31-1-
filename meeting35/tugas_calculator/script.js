function appendToDisplay(value) {  //fungsinya untuk menambahkan "hasil output" seng di teken kuwi operator e. (OPERATOR KUWI SNG NGITUNG KBH HASIL E).
                                    //Pertanyaan : piye lak sng di tkn kuwi OPERATOR E KEK , jawab:(DADI OPERATOR E KUDU DI ATUR KEK).
    document.getElementById("display").value += value;
}

function clearDisplay() {
    document.getElementById("display").value = "";
}

function calculateResult() {
    try {
        const result = eval(document.getElementById("display").value);
        document.getElementById("display").value = result;
    } catch (error) {
        document.getElementById("display").value = "Error";
    }
}