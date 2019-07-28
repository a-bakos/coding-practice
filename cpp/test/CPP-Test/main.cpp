#include <iostream>
// this is a pre-processor directive

using namespace std;

// function prototyping
void fnProto( int x );


class TestClass {
    public: // access specifier
        void someInternalMethod() {
            cout << "Hello from internal method" << endl;
        }
};


// every program has to have a main function so the computer knows where to begin.
// as for "int": we need to define what sort of data this function is gonna be
// working with
// main() always works with integers.
int main()
{
    int a;
    int b;
    int sum;

    int variable = 100;

    // cout is an output stream object
    // it is followed by a strea insertion operator <<
    cout << "Hello world!" << endl;

    cout << "This is gonna be on \n";
    cout << "a new line. \n";
    cout << variable;

    cout << "Enter a number \n";
    // >> is the stream extraction operator
    cin >> a; // store in "a" variable

    cout << "Enter another number \n";
    cin >> b; // store in "b" variable

    sum = a + b;
    cout << "The sum of those number is " << sum << endl;

    fnProto(200);

    TestClass usingtestclass;
    usingtestclass.someInternalMethod();

    // the main function should always have a return 0 statement
    // return 0 tells the computer that the program ran fine w/o errors
    return 0;
}

void fnProto(int x) {
    cout << "Yello from another function " << x << endl;
}
