function tampilkanCerita() {
    // Menangkap elemen dengan ID cerita
    let bagianCerita = document.getElementById("cerita");
    
    // Mengubah style display dari none menjadi block
    bagianCerita.style.display = "block";
    
    // Memberikan efek scroll halus
    bagianCerita.scrollIntoView({ behavior: 'smooth' });
}function tampilkanCerita() {
    alert("Hai Diki! Selamat membaca cerita Lebaranmu ya.");
    const section = document.getElementById('cerita');
    section.style.display = 'block';
    section.scrollIntoView({ behavior: 'smooth' });
}   