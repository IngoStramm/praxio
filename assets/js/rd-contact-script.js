var rd_form = document.getElementById( rd_contact.id );
if( rd_form ) {
	// console.log('rd_contact.ua: ' + rd_contact.ua);
	// console.log('rd_contact.id: ' + rd_contact.id);
	// console.log('rd_contact.url: ' + rd_contact.url);
	new RDStationForms( rd_contact.id + '-html', rd_contact.ua ).createForm();
}
// new RDStationForms( 'contato-praxio-pt-br-9c0ad5c42329e946feba-html', 'UA-122984918-1' ).createForm();