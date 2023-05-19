const filmListesi = document.getElementById('filmListesi');
const müzikListesi = document.getElementById('müzikListesi');
const kitapListesi=document.getElementById('kitapListesi');

const filmler = [
  'Bir Rüya İçin Ağıt',
  'Esaretin Bedeli',
  'Mutluluğa Boya Beni',
  'Caroline',
  'The Pianist',
  'Yeşil Yol'
 
];

const müzikler = [
	'Haluk Levent',
	'Pilli Bebek',
	'Şebnem Ferah',
	'Şanışer',
	'Manga',
	'Adamlar',
	'Billie Eilish',
	'Evgeny Grinko',
    'Emircan İğrek'



];

const kitaplar =[
'Bülbürü Öldürmek',
'Dorian Grayın Portresi',
' 1984',
' Fareler ve İnsanlar',
' Böğürtlen Kışı',
'Küçük Prens'
]

fetch('https://api.themoviedb.org/3/movie/550?api_key=273d5a63f37d57017dad56e3a2d0ef31', {
  headers: {
    'Authorization': '273d5a63f37d57017dad56e3a2d0ef31'
  }
})
.then(response => response.json())
.then(data => {
  const filmListesi = document.getElementById('filmListesi');

  filmler.forEach(film => {
    const li = document.createElement('li');
    li.textContent = film;
    filmListesi.appendChild(li);
  });
})
.catch(error => console.log(error));



fetch('https://spotify23.p.rapidapi.com/search/', {
  headers: {
    'Authorization': 'b8e7ce6a3bmsh64890614b76c80ap182caajsn581e54ce472c',
  }
})
.then(response => response.json())
.then(data => {
  const müzikListesi = document.getElementById('müzikListesi');

  müzikler.forEach(müzik => {
    const li = document.createElement('li');
    li.textContent = müzik;
    müzikListesi.appendChild(li);
  });
})
.catch(error => console.log(error));



fetch('https://apidojo-booking-v1.p.rapidapi.com/currency/get-exchange-rates',{
headers: {
	'Authorization':'b8e7ce6a3bmsh64890614b76c80ap182caajsn581e54ce472c' 
}
})

.then(response => response.json())
.then(data => {
  const kitapListesi = document.getElementById('kitapListesi');

  kitaplar.forEach(kitap => {
    const li = document.createElement('li');
    li.textContent = kitap;
   kitapListesi.appendChild(li);
  });
})
.catch(error => console.log(error));


