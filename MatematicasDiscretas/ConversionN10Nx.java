public class ConversionN10Nx {
    public static void main(String[] args) {
        int numero = 20;
        System.out.println(numero + " base 10 es igual a -> " + ConversionN16(numero) + " base 16");
    }

    public static String ConversionN2(int decimal) {
        String conversion = "";
        while (decimal >= 2) {
            conversion = (decimal % 2) + "" + conversion;
            decimal /= 2;
        }
        conversion = (decimal) + "" + conversion;
        return conversion;
    }

    public static String ConversionN8(int decimal) {
        String conversion = "";
        while (decimal >= 8) {
            conversion = (decimal % 8) + "" + conversion;
            decimal /= 8;
        }
        conversion = (decimal) + "" + conversion;
        return conversion;
    }

    public static String ConversionN16(int decimal) {
        String conversion = "";
        while (decimal >= 16) {
            conversion = (transform((decimal % 16)) + "" + conversion);
            decimal /= 16;
        }
        conversion = (transform((decimal)) + "" + conversion);
        return conversion;
    }

    public static String transform(int number) {
        if (number == 10) return "A";
        if (number == 11) return "B";
        if (number == 12) return "C";
        if (number == 13) return "D";
        if (number == 14) return "E";
        if (number == 15) return "F";
        return number + "";
    }
}