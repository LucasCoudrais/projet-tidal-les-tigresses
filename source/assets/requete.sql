select * from patho
inner join meridien on patho.mer = meridien.code
inner join symptpatho on patho.idp = symptpatho.idp
inner join symptome on symptpatho.ids = symptome.ids
inner join keySympt on symptome.ids = keySympt.ids
inner join keywords on keySympt.idk = keywords.idk
where keywords.name like '%pied%'