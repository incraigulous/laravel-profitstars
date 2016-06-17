<soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:pv="https://ssl.selectpayment.com/PV">
	<soapenv:Header/>
	<soapenv:Body>
		<pv:CaptureTransaction>
			<pv:storeId><?=$this->e($credentials['store-id'])?></pv:storeId>
			<pv:storeKey><?=$this->e($credentials['store-key'])?></pv:storeKey>
			<pv:entityId><?=$this->e($credentials['entity-id'])?></pv:entityId>
			<pv:locationId><?=$this->e($credentials['location-id'])?></pv:locationId>
			<pv:originalReferenceNumber><?=$this->e($originalReferenceNumber)?></pv:originalReferenceNumber>
			<pv:captureAmount><?=$this->e($captureAmount)?></pv:captureAmount>
		</pv:CaptureTransaction>
	</soapenv:Body>
</soapenv:Envelope>
