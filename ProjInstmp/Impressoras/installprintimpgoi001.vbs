Set WshNetwork = WScript.CreateObject("WScript.Network")
PrinterPath = "\\GNSVHER536\IMPRESSORA_GOIANESIA"
WshNetwork.AddWindowsPrinterConnection PrinterPath
WshNetwork.SetDefaultPrinter "\\GNSVHER536\IMPRESSORA_GOIANESIA"