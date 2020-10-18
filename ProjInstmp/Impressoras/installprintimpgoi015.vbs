Set WshNetwork = WScript.CreateObject("WScript.Network")
PrinterPath = "\\GNSVHER536\IMPGOI015"
WshNetwork.AddWindowsPrinterConnection PrinterPath
WshNetwork.SetDefaultPrinter "\\GNSVHER536\IMPGOI015" 