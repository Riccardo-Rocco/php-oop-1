
class Movie {
    public $title;
    public $director;
    private $genres = [];

    public function __construct($title, $director, $genres) {
        $this->title = $title;
        $this->director = $director;
        $this->setGenres($genres);
    }

    public function setGenres($genres) {
        if (is_array($genres)) {
            $this->genres = $genres;
        } else {
            $this->genres = [$genres];
        }
    }

    public function getGenresAsString() {
        return implode(', ', $this->genres);
    }
}
