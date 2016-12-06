FOREIGN KEY OPTIES
-------------------

**Set NULL** : Sets the column value to NULL when you delete the parent table row.

**CASCADE** : CASCADE will propagate the change when the parent changes. If you delete a row, rows in constrained tables that reference that row will also be deleted, etc.

**RESTRICT** : RESTRICT causes you can not delete a given parent row if a child row exists that references the value for that parent row.

**NO ACTION** : NO ACTION and RESTRICT are very much alike. when an UPDATE or DELETE statement is executed on the referenced table, the DBMS verifies at the end of the statement execution that none of the referential relationships are violated. in short child row no concern if parent row delete or update.


RELATIES
---------

### Eén-op-veel-relaties

De meest gebruikte relatie bij het creëren van relationele databases.  
Een rij in een tabel in een database kan worden gekoppeld aan één of (waarschijnlijk) meer rijen in een andere tabel.  
Eén bestelling van meerdere artikelen is een goed voorbeeld van een één-op-veel-relatie.  
En aangezien relaties in twee richtingen werken, wordt er ook wel eens verwezen naar veel-op-één-relaties.

### Eén-op-één-relaties

Een rij in een tabel is gekoppeld aan één rij, en alleen die ene rij, in een andere tabel.  
Zo kan bijvoorbeeld een persoon slechts één burgerservicenummer hebben en een burgerservicenummer kan slechts aan één persoon zijn toegewezen.  
Dat is een uitstekend voorbeeld van een één-op-één-relatie. 
In de meeste gevallen is er geen behoefte aan een één-op-één-relatie omdat de inhoud van beide tabellen in één tabel kan worden gecombineerd.

### Veel-op-veel-relaties

Eén of meer rijen in een tabel zijn gekoppeld aan één of meer rijen in een andere tabel.  
Een schoolvoorbeeld van een veel-op-veel-relatie is een tabel met klanten die vele producten kunnen kopen en vele producten die door veel klanten kunnen worden gekocht.

[Bron: Relationships](http://www.filemaker.com/nl/support/relationships.html)