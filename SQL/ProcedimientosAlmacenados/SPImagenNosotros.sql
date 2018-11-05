Use pagadmin	;

DELIMITER $$
 CREATE PROCEDURE PA_Set_ImagenNosotros(
in _IdImagenNosotros  int,
in _Image varchar(45),
in _IdUsuario int,
in _Opcion varchar(45) 

 )
BEGIN
 if _Opcion='I' then

insert into ImagenNosotros (Image, IdUsuario) values(_Image, _IdUsuario);


   End IF;

    if _Opcion='D' then

Delete from ImagenNosotros where IdImagenNosotros =_IdImagenNosotros ;

   
   End If;
   END
   $$

DELIMITER $$
 CREATE PROCEDURE PA_Get_ImagenNosotros(

     in _Opcion varchar(45)
 )
BEGIN
  
   
 if _Opcion='T' then

select * from ImagenNosotros order by IdImagenNosotros desc limit 1  ;

   End IF;

   END
   $$