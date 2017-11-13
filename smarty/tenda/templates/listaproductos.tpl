    {foreach from=$productos item=producto}
      <p><form id='{$producto->cod}' action='productos.php' method='post'>
      <input type='hidden' name='cod' value='{$producto->cod}'/>
      <input type='submit' name='enviar' class='boton' value='Añadir'/>
      {* Comprobamos por nombres de familia que tengan que ver con lo que indica la tarea *}
      {if $producto->familia!="ORDENA"}
        {* Si no son ordenadores mostramos el nombre de forma normal*}
        {$producto->nombre_corto}
      {else}
        {* Si son ordenadores creamos un enlace a ordenador.php pasando el codigo por GET *}
        <a href="ordenador.php?codigo={$producto->cod}">{$producto->nombre_corto}</a>
      {/if}
      : {$producto->PVP} euros.</form></p>
    {/foreach}
