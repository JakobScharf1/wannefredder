import { ComponentFixture, TestBed } from '@angular/core/testing';

import { PortfolioMasonryTwo } from './portfolio-masonry-two';

describe('PortfolioMasonryTwo', () => {
  let component: PortfolioMasonryTwo;
  let fixture: ComponentFixture<PortfolioMasonryTwo>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [PortfolioMasonryTwo]
    })
    .compileComponents();

    fixture = TestBed.createComponent(PortfolioMasonryTwo);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
