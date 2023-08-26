window.addEventListener("load", function() {
    setTimeout(() => {
        const container = document.getElementById("container");
        container.style.opacity = 1;
    }, 2000); // 2000 milisaniye (2 saniye) gecikme
});

document.getElementById("myForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Formun otomatik olarak gönderilmesini engeller

    var form = event.target;
    var name = form.elements["name"].value;
    var surname = form.elements["surname"].value;
    var birth = form.elements["birth"].value;
    var gender = form.elements["gender"].value;
    var days = form.elements["days"].value;
    var city = form.elements["city"].value;
    var number = form.elements["number"].value;
    var email = form.elements["email"].value;

    if (name && surname && birth && gender && days && city && number && email) { // gerekli alanları doldurulmuşsa
        // Popup mesajını göster
        alert("Formunuz Başarılı Şekilde Gönderildi!");
        form.reset(); // Formu sıfırla
    } else {
        alert("Lütfen gerekli tüm alanları doldurun.");
    }
});


