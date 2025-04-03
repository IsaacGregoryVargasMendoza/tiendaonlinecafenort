<p>Se ha registrado una nueva solicitud de cotización con los siguientes datos: </p>
<p><b>Nombre:</b> {{ $solicitud->nombre }}</p>
<p><b>Email:</b> {{ $solicitud->email }}</p>
<p><b>Servicio:</b> {{ $solicitud->servicio }}</p>
<p><b>Mensaje:</b></p>
<p>{!! nl2br(e($solicitud->mesaje)) !!}</p>