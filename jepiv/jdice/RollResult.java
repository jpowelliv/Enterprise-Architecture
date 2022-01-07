import java.util.*;
/*
JDice: Java Dice Rolling Program
Copyright (C) 2006 Andrew D. Hilton  (adhilton@cis.upenn.edu)


This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

 */


public class RollResult {
    int total;
    int modifier;
    // To quote a movie line: What's your Vector, Victor?
    Vector<Integer> rolls;
    private RollResult(int total, 
		       int modifier,
		       Vector<Integer> rolls){
	this.total=total;
	this.modifier=modifier;
	this.rolls=rolls;
    }
    public RollResult(int bonus) {
	this.total=bonus;
	this.modifier=bonus;
	rolls=new Vector<Integer>();
    }
    public void addResult(int res){
	total+=res;
	rolls.add(res);
    }
    public RollResult andThen(RollResult r2) {
	int total=this.total+r2.total;
	Vector<Integer> rolls=new Vector<Integer>();
	rolls.addAll(this.rolls);
	rolls.addAll(r2.rolls);
	return new RollResult(total,
			      this.modifier+r2.modifier,
			      rolls);
    }
    // this is a method override
    // toString is public in the super class (Object)
    // you can't make a method more private (must be public)
    public String toString() {
	return total +"  <= " +rolls.toString()+ 
	    (modifier>0?("+"+modifier):
	     modifier<0?modifier:"");
    }


}
