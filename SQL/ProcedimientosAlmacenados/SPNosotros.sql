Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_Nosotros(
in _IdNosotros int,
in _Descripcion varchar(100),
in _IdUsuario int,
in _Opcion varchar(45)

 )
BEGIN
 if _Opcion='I' then

insert into Nosotros (Descripcion, IdUsuario ) values(_Descripcion, _IdUsuario );

   End IF;

    if _Opcion='D' then

Delete from Nostros where IdNosotros= _IdNosotros;
   
   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_Nosotros(

     in _Opcion varchar(45)
 )
BEGIN


   
   
 if _Opcion='T' then

select * from Nosotros order by IdNosotros desc limit 1;

   End IF;

   END
   $$