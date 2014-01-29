package log350.example.example6;

public class AlignedRectangle2D {

	public boolean isEmpty = true;
	private Point2D min = new Point2D(0,0);
	private Point2D max = new Point2D(0,0);

	public AlignedRectangle2D() {
	}
	public AlignedRectangle2D( Point2D p0, Point2D p1 ) {
		bound( p0 );
		bound( p1 );
	}

	public void clear() { isEmpty = true; }

	// Enlarge the rectangle as necessary to contain the given point
	public void bound( Point2D p ) {
		if ( isEmpty ) {
			min.copy(p);
			max.copy(p);
			isEmpty = false;
		}
		else {
			if ( p.x() < min.x() ) min.p[0] = p.x();
			else if ( p.x() > max.x() ) max.p[0] = p.x();

			if ( p.y() < min.y() ) min.p[1] = p.y();
			else if ( p.y() > max.y() ) max.p[1] = p.y();
		}
	}

	// Enlarge the rectangle as necessary to contain the given rectangle
	public void bound( AlignedRectangle2D rect ) {
		bound( rect.min );
		bound( rect.max );
	}

	public boolean isEmpty() { return isEmpty; }

	public boolean contains( Point2D p ) {
		return !isEmpty
			&& min.x() <= p.x() && p.x() <= max.x()
			&& min.y() <= p.y() && p.y() <= max.y();
	}
	public boolean contains( AlignedRectangle2D r ) {
		if ( isEmpty ) return false;
		if ( r.isEmpty ) return true;
		return min.x() <= r.min.x() && r.max.x() <= max.x()
			&& min.y() <= r.min.y() && r.max.y() <= max.y();
	}

	public Point2D getMin() { return min; }
	public Point2D getMax() { return max; }
	public Vector2D getDiagonal() { return Point2D.diff(max,min); }
	public Point2D getCenter() {
		return Point2D.average( min, max );
	}
}

