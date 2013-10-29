// Test functions for outlet.cpp
// Copyright Byron Lutz 2011

#include <iostream>
#include <string>

using namespace std;

int main()
{
    Outlet* outlets[4];
    outlets[0] = new TwitterAccount("hurriyya");
	// Phone users may prefer messages to be left as voice or text.
    outlets[1] = new Phone("(20-2) 2797 3300", VOICE);
    outlets[2] = new Phone("(20-3) 486 1009", TEXT);
    outlets[3] = new FacebookAccount("Da'ud AlJubail");
	
    cout << "Send the message." << endl;
    for (int k = 0; k < 4; k++)
        send(outlets[k], "Peacefully gather at the central square.");
	
	// Clean up the outlets before exiting
    cout << "Cleaning up." << endl;
    for (int k = 0; k < 4; k++)
        delete outlets[k];
}