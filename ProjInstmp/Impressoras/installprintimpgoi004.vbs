Set WshNetwork = WScript.CreateObject("WScript.Network")
PrinterPath = "\\GNSVHER536\IMPGOI004"
WshNetwork.AddWindowsPrinterConnection PrinterPath
WshNetwork.SetDefaultPrinter "\\GNSVHER536\IMPGOI004" 