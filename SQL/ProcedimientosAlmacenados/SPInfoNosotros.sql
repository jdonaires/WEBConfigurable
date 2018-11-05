Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_InfoNosotros(
in _IdInfoNosotros int,
in _Titulo varchar(45),
in _Descripcion varchar(45),
in _Image1 varchar(45),
in _Image2 varchar(45),
in _IdUsuario int,
in _Opcion varchar(45)

 )
BEGIN
 if _Opcion='I' then

insert into infonosotros (Titulo,Descripcion,Image1, Image2, IdUsuario ) values(_Titulo,_Descripcion,_Image1, _Image2, _IdUsuario  );

   End IF;

    if _Opcion='D' then

delete  from infonosotros where IdInfoNosotros = _IdInfoNosotros;
   
   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_InfoNosotros(

     in _Opcion varchar(45)
 )
BEGIN

   
 if _Opcion='T' then

select * from InfoNosotros order by idInfoNosotros desc limit 1;

   End IF;

   END
   $$