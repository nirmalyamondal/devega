CREATE TABLE tx_devegaprofile_domain_model_profile (
	name varchar(255) NOT NULL DEFAULT '',
	image int(11) unsigned NOT NULL DEFAULT '0',
	abteilung varchar(255) NOT NULL DEFAULT '',
	zusatz varchar(255) NOT NULL DEFAULT '',
	telefon varchar(255) NOT NULL DEFAULT '',
	handy varchar(255) NOT NULL DEFAULT '',
	email varchar(255) NOT NULL DEFAULT '',
	linktext varchar(255) NOT NULL DEFAULT '',
	link varchar(255) NOT NULL DEFAULT '',
	sorting int(10) unsigned DEFAULT '0' NOT NULL
);
