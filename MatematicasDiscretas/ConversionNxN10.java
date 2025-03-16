import java.util.Scanner;

public class ConversionNxN10 {
    public static void main(String[] args) {
        String cadena[] = {"1", "A"};
        System.out.println(ConversionN16(cadena));
    }


    public static int ConversionN2(String[] binario) {
        int conversion = 0;
        for (int i = binario.length-1; i >= 0; i--) {
            conversion += (Integer.parseInt(binario[i]) * (Math.pow(2, binario.length-i-1)));
        }
        return conversion;
    }

    public static int ConversionN8(String[] octal) {
        int conversion = 0;
        for (int i = octal.length-1; i >= 0; i--) {
            conversion += (Integer.parseInt(octal[i]) * (Math.pow(8, octal.length-i-1)));
        }
        return conversion;
    }

    public static int ConversionN16(String[] hexadecimal){
        int conversion = 0;
        for (int i = hexadecimal.length-1; i>=0 ; i--){
            String temporal = hexadecimal[i];
            if(temporal.equals("A")) temporal = "10";
            if(temporal.equals("B")) temporal = "11";
            if(temporal.equals("C")) temporal = "12";
            if(temporal.equals("D")) temporal = "13";
            if(temporal.equals("E")) temporal = "14";
            if(temporal.equals("F")) temporal = "15";
            conversion += (Integer.parseInt(temporal) * (Math.pow(16, hexadecimal.length-1-i)));
        }
        return conversion;
    }
}
