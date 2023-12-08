function ajouter() {
    let produit = document.getElementById("produit").value;
    let qté = document.getElementById("qté").value;
    let prix = document.getElementById("prix").value;
    let pInfo = { "qté": qté, "prix": prix };
    console.log(pInfo)
    localStorage.setItem(produit, JSON.stringify(pInfo));
    // document.getElementById("produit").value=""
    afficher()


}
function modifier() {
    let produit = document.getElementById("produit").value;
    let Nveauproduit = JSON.parse(localStorage.getItem(produit))
    document.getElementById("qté").value = Nveauproduit.qté;
    document.getElementById("prix").value = Nveauproduit.prix;

    console.log(Nveauproduit);
    console.log(typeof (Nveauproduit))
    afficher()

}

function supprimer() {
    let produit = document.getElementById("produit").value;
    localStorage.removeItem(produit);
    document.getElementById("produit").value = "";
    afficher()
}
function afficher() {
    let key = "";
    let paires = "<tr><td>Produit</td><td>Quantité</td><td>Prix</td></tr>";
    for (let cpt = 0; cpt < localStorage.length; cpt++) {
        key = localStorage.key(cpt);
        let data = JSON.parse(localStorage.getItem(key));
        paires += "<tr><td>" + key + "</td><td>" + data.qté + "</td><td>" + data.prix + "</td></tr>";
    }
    document.getElementById("display").innerHTML = paires;
}
