<? 

$xml='<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:cer="http://certificadorprevisional.fonasa.gov.cl.ws/">
<soapenv:Header/>
<soapenv:Body>
<cer:getCertificadoPrevisional>
<cer:query>
<cer:queryTO>
<cer:tipoEmisor>10</cer:tipoEmisor>
<cer:tipoUsuario>1</cer:tipoUsuario>
</cer:queryTO>
<cer:entidad>61608000</cer:entidad>
<cer:claveEntidad>6160</cer:claveEntidad>
<cer:rutBeneficiario>'.$rut.'</cer:rutBeneficiario>
<!--Optional:-->
<cer:dgvBeneficiario>'.$dv.'</cer:dgvBeneficiario>
<cer:canal>10</cer:canal>
</cer:query>
</cer:getCertificadoPrevisional>
</soapenv:Body>
</soapenv:Envelope>';



?>