if not printerexist("\\GNSVHER536\IMPGOI002") then
	set objNet = CreateObject("wscript.network")
	objNet.AddWindowsPrinterConnection "\\GNSVHER536\IMPGOI002"
	


Set WshNetwork = WScript.CreateObject("WScript.Network")
PrinterPath = "\\GNSVHER536\IMPGOI002"
WshNetwork.AddWindowsPrinterConnection PrinterPath
WshNetwork.SetDefaultPrinter "\\GNSVHER536\IMPGOI002" 
	
end if

Function PrinterExist(strPrinterPath)
	PrinterExist=False
	strPrinterPath=ucase(strPrinterPath)
	
	Set WshNetwork = WScript.CreateObject("WScript.Network")
	Set WSHPrinters = WSHNetwork.EnumPrinterConnections

	For i = 0 To WSHPrinters.Count - 1 Step 2
		if ucase(WSHPrinters.Item(i+1))=strPrinterPath then
			PrinterExist=true
			exit function
		end if
	Next

	
 
end function