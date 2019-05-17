var rd_contact = document.getElementById( rd.contact_id );
var rd_train = document.getElementById( rd.train_id );
var solucoes = document.getElementById( rd.solucoes_form_id );
var blog = document.getElementById( rd.rd_blog_id );
var newsletter = document.getElementById( rd.rd_newsletter_id );

if( rd_contact ) {
	new RDStationForms( rd.contact_id + '-html', rd.ua ).createForm();
}
if( rd_train ) {
	new RDStationForms( rd.train_id + '-html', rd.ua ).createForm();
}
if( solucoes ) {
	new RDStationForms( rd.solucoes_form_id + '-html', rd.ua ).createForm();
}
if( blog ) {
	new RDStationForms( rd.rd_blog_id + '-html', rd.ua ).createForm();
}
if( newsletter ) {
	new RDStationForms( rd.rd_newsletter_id + '-html', rd.ua ).createForm();
}