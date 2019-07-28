#include <iostream>
#include <string>

using namespace std;

class HelloClass
{
	public:
		// Constructor
		HelloClass( string z ) {
			setName(z);
		}

		void setName( string x ) {
			name = x;
		}

		string getName() {
			return name;
		}

	private:
		string name;
};

int main()
{
	HelloClass hcl("some string assignment");
	cout << hcl.getName() << endl;
	return 0;
}
