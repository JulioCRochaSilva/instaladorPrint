Set WshNetwork = WScript.CreateObject("WScript.Network")
PrinterPath = "\\GNSVHER536\IMPGOI010"
WshNetwork.AddWindowsPrinterConnection PrinterPath
WshNetwork.SetDefaultPrinter "\\GNSVHER536\IMPGOI010" 