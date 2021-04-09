GET/?operation=select_services    ->returneaza toate serviciile

GET/?operation=select_subscribers ->returneaza toti subscriberii

GET/?operation=select_subscriber_by_id&id={id} ->returneaza informatii despre Subscriberul cu idul: {id}

GET/?operation=add_subscriber&params=name-surname-phone-email-birthdate-isActive-services
	name=Numele
	surname=Prenumele
	phone=Numarul de contact
	email=emailul
	birthdate=data de nastere in formatul :DD/MM/YYYY 
	isActive = 1-activ, 0-inactiv
	services= Id'ul serviciilor activate in formatul : {id}.{id}.{id}.{id}.and so on... (0 pentru nici un serviciu)

GET/?operation=modify_subscriber&id=2&params=n:name-s:surname-p:phone-e:email-b:birthdate-a:isActive-s:services
	name=Numele 
	surname=Prenumele 
	phone=Numarul de contact 
	email=emailul 
	birthdate=data de nastere in formatul :    
	isActive = 1-activ, 0-inactiv  
	services= Id'ul serviciilor activate in formatul : {id}.{id}.{id}.{id}.and so on... (0 pentru nici un serviciu)

GET/?operation=delete_subscriber?id={id}
	{id} = id'ul subscriberului;

GET/?operation=add_service_to_subscriber&id={id}&serv={ids}.{ids}.{ids}.{ids}.and so on...
	{id} = id'ul subscriberului;
	{ids} = id'ul serviciului;

GET/?operation=delete_service&id={id}
	{id} = id'ul serviciului

GET/?operation=create_service&params=name-price-isActive
	name = Numele serviciului
	price = Pretul serviciului
	isActive = 1 sau 0 Daca este activ serviciul

GET/?operation=cgeck_log
	Verifica log.



todo:
Rezolvarea introducerii datii in baza de date.
functie:
*Show active services
Add service->verificare daca subscriberul este activ;
*make_inactive_sub
*make_inactive_service

